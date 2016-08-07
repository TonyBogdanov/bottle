// Register a selector matches() method for unsupported browsers
if(!Element.prototype.matches) {
    Element.prototype.matches = Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector ||
        Element.prototype.msMatchesSelector || function(s) {
        return [].indexOf.call(document.querySelectorAll(s), this) !== -1;
    };
}

// Add an HTML import to the <head> of the document
function _tb_import(url, callback) {
    var link                = document.createElement('link');
    if(callback) {
        link.addEventListener('load', callback);
    }
    link.rel                = 'import';
    link.href               = url;
    document.head.appendChild(link);
}

// Add a JavaScript import to the <head> of the document
function _tb_import_script(url, callback) {
    var script              = document.createElement('script');
    if(callback) {
        script.addEventListener('load', callback);
    }
    script.src              = url;
    document.head.appendChild(script);
}

// Imports
_tb_import_script('../bower_components/webcomponentsjs/webcomponents-lite.min.js');
_tb_import('lib/lib.html');

// Once Polymer is ready
window.addEventListener('WebComponentsReady', function() {
    window.dispatchEvent(new CustomEvent('polymer-ready'));
    document.body.classList.add('ready');

    // TODO remove
    for(var i = 0, e, es = document.querySelectorAll('.demo-block'); i < es.length && (e = es.item(i)); i++) {
        var pre             = document.createElement('pre');
        var code            = document.createElement('div');
        var left            = document.createElement('span');
        var right           = document.createElement('span');
        var bottom          = document.createElement('span');
        code.textContent    = e.querySelector('.content').innerHTML;
        pre.classList.add('demo-code');
        pre.classList.add('html');
        code.classList.add('pre');
        left.classList.add('left');
        right.classList.add('right');
        bottom.classList.add('bottom');
        pre.appendChild(code);
        pre.appendChild(left);
        pre.appendChild(right);
        pre.appendChild(bottom);
        e.parentElement.insertBefore(pre, e);
        e.parentElement.insertBefore(e, pre);
        hljs.highlightBlock(code);
    }
});