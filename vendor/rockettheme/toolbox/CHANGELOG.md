# v1.2.0
## 10/24/2015

1. [](#new)
    * **Backwards compatibility break**: Blueprints class needs to be initialized with `init()` if blueprints contain `@data-*` fields 
    * Renamed NestedArrayAccess::remove() into NestedArrayAccess::undef() to avoid name clashes

# v1.1.4
## 10/15/2015

1. [](#new)
    * Add support for native YAML parsing option to Markdown and YAML file classes

# v1.1.3
## 09/14/2015

3. [](#bugfix)
    * Fix regression: Default values for collections were broken
    * Fix Argument 1 passed to `RocketTheme\Toolbox\Blueprints\Blueprints::mergeArrays()` must be of the type array
    * Add exception on Blueprint collection merging; only overridden value should be used
    * File locking truncates contents of the file
    * Stop duplicate Messages getting added to the queue

# v1.1.2
## 08/27/2015

1. [](#new)
    * Creation of Changelog
