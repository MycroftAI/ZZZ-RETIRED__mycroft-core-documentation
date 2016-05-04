<?php

namespace RocketTheme\Toolbox\ResourceLocator;

/**
 * Implements Uniform Resource Location.
 *
 * @package RocketTheme\Toolbox\ResourceLocator
 * @author RocketTheme
 * @license MIT
 *
 * @link http://webmozarts.com/2013/06/19/the-power-of-uniform-resource-location-in-php/
 */
class UniformResourceLocator implements ResourceLocatorInterface
{
    /**
     * @var string  Base URL for all the streams.
     */
    public $base;

    /**
     * @var array
     */
    protected $schemes = [];

    /**
     * @var array
     */
    protected $cache = [];

    public function __construct($base = null)
    {
        // Normalize base path.
        $this->base = rtrim(str_replace('\\', '/', $base ?: getcwd()), '/');
    }

    /**
     * Return iterator for the resource URI.
     *
     * @param  string $uri
     * @param  int    $flags    See constants from FilesystemIterator class.
     * @return UniformResourceIterator
     */
    public function getIterator($uri, $flags = null)
    {
        return new UniformResourceIterator($uri, $flags, $this);
    }

    /**
     * Return recursive iterator for the resource URI.
     *
     * @param  string $uri
     * @param  int    $flags    See constants from FilesystemIterator class.
     * @return RecursiveUniformResourceIterator
     */
    public function getRecursiveIterator($uri, $flags = null)
    {
        return new RecursiveUniformResourceIterator($uri, $flags, $this);
    }

    /**
     * Reset locator by removing all the schemes.
     *
     * @return $this
     */
    public function reset()
    {
        $this->schemes = [];
        $this->cache = [];

        return $this;
    }

    /**
     * Add new paths to the scheme.
     *
     * @param string $scheme
     * @param string $prefix
     * @param string|array $paths
     * @param bool  $override  Add path as override.
     * @param bool  $force     True to add paths even if them do not exist.
     * @throws \BadMethodCallException
     */
    public function addPath($scheme, $prefix, $paths, $override = false, $force = false)
    {
        $list = [];
        foreach((array) $paths as $path) {
            if (is_array($path)) {
                // Support stream lookup in ['theme', 'path/to'] format.
                if (count($path) != 2) {
                    throw new \BadMethodCallException('Invalid stream path given.');
                }
                $list[] = $path;
            } elseif (strstr($path, '://')) {
                // Support stream lookup in 'theme://path/to' format.
                $list[] = explode('://', $path, 2);
            } else {
                // Normalize path.
                $path = rtrim(str_replace('\\', '/', $path), '/');
                if ($force || @file_exists("{$this->base}/{$path}") || @file_exists($path)) {
                    // Support for absolute and relative paths.
                    $list[] = $path;
                }
            }
        }

        if (isset($this->schemes[$scheme][$prefix])) {
            $list = $override
                ? array_merge($this->schemes[$scheme][$prefix], $list)
                : array_merge($list, $this->schemes[$scheme][$prefix]);
        }

        $this->schemes[$scheme][$prefix] = $list;

        // Sort in reverse order to get longer prefixes to be matched first.
        krsort($this->schemes[$scheme]);

        $this->cache = [];
    }

    /**
     * Return base directory.
     *
     * @return string
     */
    public function getBase()
    {
        return $this->base;
    }


    /**
     * Return true if scheme has been defined.
     *
     * @param string $name
     * @return bool
     */
    public function schemeExists($name)
    {
        return isset($this->schemes[$name]);
    }

    /**
     * Return defined schemes.
     *
     * @return array
     */
    public function getSchemes()
    {
        return array_keys($this->schemes);
    }

    /**
     * Return all scheme lookup paths.
     *
     * @param $scheme
     * @return array
     */
    public function getPaths($scheme)
    {
        return isset($this->schemes[$scheme]) ? $this->schemes[$scheme] : [];
    }

    /**
     * @param  string $uri
     * @return string|bool
     * @throws \BadMethodCallException
     */
    public function __invoke($uri)
    {
        if (!is_string($uri)) {
            throw new \BadMethodCallException('Invalid parameter $uri.');
        }
        return $this->findCached($uri, false, true, false);
    }

    /**
     * Find highest priority instance from a resource.
     *
     * @param  string $uri      Input URI to be searched.
     * @param  bool   $absolute Whether to return absolute path.
     * @param  bool   $first    Whether to return first path even if it doesn't exist.
     * @throws \BadMethodCallException
     * @return string|bool
     */
    public function findResource($uri, $absolute = true, $first = false)
    {
        if (!is_string($uri)) {
            throw new \BadMethodCallException('Invalid parameter $uri.');
        }
        return $this->findCached($uri, false, $absolute, $first);
    }

    /**
     * Find all instances from a resource.
     *
     * @param  string $uri      Input URI to be searched.
     * @param  bool   $absolute Whether to return absolute path.
     * @param  bool   $all      Whether to return all paths even if they don't exist.
     * @throws \BadMethodCallException
     * @return array
     */
    public function findResources($uri, $absolute = true, $all = false)
    {
        if (!is_string($uri)) {
            throw new \BadMethodCallException('Invalid parameter $uri.');
        }

        return $this->findCached($uri, true, $absolute, $all);
    }

    /**
     * Find all instances from a list of resources.
     *
     * @param  array  $uris     Input URIs to be searched.
     * @param  bool   $absolute Whether to return absolute path.
     * @param  bool   $all      Whether to return all paths even if they don't exist.
     * @throws \BadMethodCallException
     * @return array
     */
    public function mergeResources(array $uris, $absolute = true, $all = false)
    {
        $uris = array_unique($uris);

        $list = [];
        foreach ($uris as $uri) {
            $list = array_merge($list, $this->findResources($uri, $absolute, $all));
        }

        return $list;
    }

    /**
     * Parse resource.
     *
     * @param $uri
     * @return array
     * @throws \InvalidArgumentException
     * @internal
     */
    protected function parseResource($uri)
    {
        $segments = explode('://', $uri, 2);
        $file = array_pop($segments);
        $scheme = array_pop($segments);

        if (!$scheme) {
            $scheme = 'file';
        }

        if (!$file && $scheme == 'file') {
            $file = $this->base;
        }

        return [$scheme, $file];
    }


    protected function findCached($uri, $array, $absolute, $all)
    {
        // Local caching: make sure that the function gets only called at once for each file.
        $key = $uri .'@'. (int) $array . (int) $absolute . (int) $all;

        if (!isset($this->cache[$key])) {
            list ($scheme, $file) = $this->parseResource($uri);

            $this->cache[$key] = $this->find($scheme, $file, $array, $absolute, $all);
        }

        return $this->cache[$key];
    }

    /**
     * @param  string $scheme
     * @param  string $file
     * @param  bool $array
     * @param  bool $absolute
     * @param  bool $all
     *
     * @throws \InvalidArgumentException
     * @return array|string|bool
     * @internal
     */
    protected function find($scheme, $file, $array, $absolute, $all)
    {
        if (!isset($this->schemes[$scheme])) {
            throw new \InvalidArgumentException("Invalid resource {$scheme}://");
        }

        $results = $array ? [] : false;
        foreach ($this->schemes[$scheme] as $prefix => $paths) {
            if ($prefix && strpos($file, $prefix) !== 0) {
                continue;
            }

            // Remove prefix from filename.
            $filename = '/' . trim(substr($file, strlen($prefix)), '\/');

            foreach ($paths as $path) {
                if (is_array($path)) {
                    // Handle scheme lookup.
                    $relPath = trim(trim($path[1], '/') . $filename, '/');
                    $found = $this->find($path[0], $relPath, $array, $absolute, $all);
                    if ($found) {
                        if (!$array) {
                            return $found;
                        }
                        $results = array_merge($results, $found);
                    }
                } else {
                    // TODO: We could provide some extra information about the path to remove preg_match().
                    // Check absolute paths for both unix and windows
                    if (!$path || !preg_match('`^/|\w+:`', $path)) {
                        // Handle relative path lookup.
                        $relPath = trim($path . $filename, '/');
                        $fullPath = $this->base . '/' . $relPath;
                    } else {
                        // Handle absolute path lookup.
                        $fullPath = rtrim($path . $filename, '/');
                        if (!$absolute) {
                            throw new \RuntimeException('UniformResourceLocator: Absolute stream path with relative lookup not allowed', 500);
                        }
                    }

                    if ($all || file_exists($fullPath)) {
                        $current = $absolute ? $fullPath : $relPath;
                        if (!$array) {
                            return $current;
                        }
                        $results[] = $current;
                    }
                }
            }
        }

        return $results;
    }
}
