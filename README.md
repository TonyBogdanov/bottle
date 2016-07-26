# bottle

[![Buy Me a Coffee](http://static.tonybogdanov.com/github/coffee.svg)](http://ko-fi.co/1236KUKJNC96B)

An extended collection of useful tools and snippets to help you quickly bootstrap a new project, utilizing:

- [Bourbon](http://bourbon.io)
- [MathSass](https://github.com/terkel/mathsass)
- [Bootstrap 4](http://getbootstrap.com)

This is really just a private project, but if you find any part of it useful, feel free to use it any way you want.

The main goal is to speedup the process of building [Polymer](https://polymer-project.org) based projects via a [Modular CSS](http://thesassway.com/advanced/modular-css-typography) approach.

## Installation

To install you'll need [Bower](http://bower.io). Once you do, just run:

```shell
bower install --save bottle
```

And you're done.

## Usage

To use bottle's mixins and variables (produces no CSS):

```scss
// Define your customization variables before importing the mixin
// ...
@import "bower_components/bottle/scss/mixins";
```

To bootstrap your project (produces CSS):

```scss
// Define your customization variables before importing the mixin
// ...
@import "bower_components/bottle/scss/bootstrap";
```
