# bottle

[![Buy Me a Coffee](http://static.tonybogdanov.com/github/coffee.svg)](http://ko-fi.co/1236KUKJNC96B)

An extended collection of useful tools and snippets to help you quickly bootstrap a new project, utilizing:

- [Bourbon](http://bourbon.io)
- [MathSass](https://github.com/terkel/mathsass)

Use bottle to speedup the process of building [Polymer](https://polymer-project.org) based projects via a [Modular CSS](http://thesassway.com/advanced/modular-css-typography) approach.

## Installation

To install you'll need [Bower](http://bower.io). Once you do, run:

```shell
bower install --save bottle
```

## Usage

Explore and use `skeleton` as the base of your project, or...

To use bottle's mixins and variables (produces no CSS):

```scss
@import "bower_components/bottle/scss/mixins";

// Define any customization variables after importing the mixin
// ...
```

To bootstrap your project (produces CSS):

```scss
@import "bower_components/bottle/scss/mixins";

// Define any customization variables after importing the mixin, but before the bootstrap
// ...

@import "bower_components/bottle/scss/bootstrap";
```

Various helper classes are available as [Polymer](https://polymer-project.org) [style modules](https://www.polymer-project.org/1.0/docs/devguide/styling#style-modules) under `skeleton/lib/styles/shared`.

## Modular Typography

As part of the modular approach, bottle also utilizes modular typography suggested by [John W. Long](http://thesassway.com/advanced/modular-css-typography). All supported "standard" typographical elements must be invoked either via a class equal to the tag name of the element, or by wrapping it in a `.typography` element, e.g.:

```html
<h4 class="p">A paragraph</h4>
<div class="typography">
	<p>A paragraph</p>
</div>
```

## TODO

Check [TODO.txt](https://github.com/TonyBogdanov/bottle/blob/master/TODO.txt).