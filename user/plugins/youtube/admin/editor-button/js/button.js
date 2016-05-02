(function(){

    if (typeof window.customToolbarElements === 'undefined') { window.customToolbarElements = []; }
    window.customToolbarElements.push({
        identifier: 'youtube-video',
        button: {
            title  : 'YouTube Video',
            label  : '<i class="fa fa-fw fa-youtube"></i>',
        },
        processAction: function(editor) {
            var videoURL = prompt("Enter the YouTube Video URL. E.g. https://www.youtube.com/watch?v=Q1M5f6mjsac");

            if (videoURL) {
                var text = '[plugin:youtube](' + videoURL + ')';

                //Add text to the editor
                var cm      = editor.editor,
                    pos     = cm.getDoc().getCursor(true),
                    posend  = cm.getDoc().getCursor(false);

                for (var i=pos.line; i<(posend.line+1);i++) {
                    cm.replaceRange(text+cm.getLine(i), { line: i, ch: 0 }, { line: i, ch: cm.getLine(i).length });
                }

                cm.setCursor({ line: posend.line, ch: cm.getLine(posend.line).length });
                cm.focus();
            }
        }
    });

})();
