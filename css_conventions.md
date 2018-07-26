# CSS coding conventions
<div class="alert alert-info">These coding conventions apply for Luna 2.0 and higher versions.</div>

The rules and recommendations set forth in this section apply to CSS and SCSS in use by Luna.

## Naming convention
The naming rules apply to the naming of ids and classes.

* Keep classes lowercase and use dashes (not underscores or camelCase). Dashes serve as natural breaks in related class (e.g., `.btn` and `.btn-danger`).
* Avoid excessive and arbitrary shorthand notation. `.btn` is useful for button, but `.s` doesn't mean anything.
* Keep classes as short and succinct as possible.
* Use meaningful names; use structural or purposeful names over presentational.
* Prefix classes based on the closest parent or base class.
* Use `.js-*` classes to denote behavior (as opposed to style), but keep these classes out of your CSS.

## Brace policy and indentation
Braces are placed behind the last selector to which the declaration applies. Each selector and property has its own rule. All indentation should be made using 4 spaces, not tabs.

Here's an example:

```css
.navbar-default .navbar-brand,
.navbar-default .navbar-nav > li > a {
        color: #fff;
}
```

## Line breaks and encoding
All line breaks should be CR LF Windows only. Set your editor to save files with Windows style line breaks. All files should be saved using UTF-8 encoding.

## Syntax
* All indentation should be made using tabs (with a tab size of 4), not spaces.
* When grouping selectors, give each selector its own line.
* Include one space before the opening brace of declaration blocks for legibility, no space after.
* Give closing braces for declarations their own line.
* Include one space after `:` for each declaration.
* Each declaration should have its own line for more accurate error reporting.
* End all declarations with a semi-colon, including the last one.
* Comma-separated property values should include a space after each comma (e.g., `box-shadow`).
* Don't include spaces after commas _within_ `rgb()`, `rgba()`, `hsl()`, `hsla()`, or `rect()` values.
* Don't prefix property values or color parameters with a leading zero (e.g., `.5` instead of `0.5` and `-.5px` instead of `-0.5px`).
* Use hex values to describe colors as much as possible. If you need a transparent color, use `rgba()`.
* Lowercase all hex values, e.g., `#fff`. Lowercase letters are easier to discern when scanning a document as they tend to have more unique shapes.
* Use shorthand hex values where available, e.g., `#fff` instead of `#ffffff`.
* Quote attribute values in selectors, e.g., `input[type="text"]`. [They are only optional in some cases](http://mathiasbynens.be/notes/unquoted-attribute-values#css), and it's a good practice for consistency.
* Avoid specifying units for zero values, e.g., `margin: 0;` instead of `margin: 0px;`.

```css
/* The bad way */
.selector, .selector-secondary, .selector[type=text] {
    padding:15px;
    margin:0px 0px 15px;
    background-color:rgba(0, 0, 0, 0.5);
    box-shadow:0px 1px 2px #CCC,inset 0 1px 0 #FFFFFF
}

/* The good way */
.selector,
.selector-secondary,
.selector[type="text"] {
    padding: 15px;
    margin-bottom: 15px;
    background-color: rgba(0,0,0,.5);
    box-shadow: 0px 1px 2px #ccc, inset 0 1px 0 #fff;
}
```

## Declaration order
Related property declarations should be grouped together following the order:

* Positioning (`top`, `position`, `z-index`)
* Box model (`display`, `float`, `height`)
* Typography (`font-family`, `color`, `letter-spacing`, `line-height`)
* Visual appearance (`background`, `border`)
* Misc (`opacity`)

## Media query usage
Place media queries as close to their relevant rule sets whenever possible. Don't bundle them all in a separate stylesheet or at the end of the document. Doing so only makes it easier for folks to miss them in the future.

Media queries that only alter one specific class that already has non-queried properties should be put in that class and not repeat the class. These queries should only contain properties. If the class only contains properties that apply to a media query, the class itself should also be listed within the query.

If a media query manipulates multiple classes, it should wrap around all of them and its parent if it does not manipulate any other properties for style.

```scss
.tab-content .form-group {
    .col-sm-3 {
        padding-left: 0;
        
        @media (max-width:767px) {
            padding-right: 0;
        }
    }

    @media (min-width:768px) {
        .col-sm-6 {
            &:first-child {
                padding-left: 15px;
            }
            
            &:last-child {
                padding-right: 15px;
            }
        }
    }
}
```

## Prefixed properties
Prefixes is not something to worry about in SCSS. Any tool set up to compile the SCSS should have auto-prefixing enabled.

```css
/* The bad way */
.selector {
    -webkit-border-raius: 5px;
    border-radius: 5px;
    box-shadow: 0 1px 2px rgba(0,0,0,.15);
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
}

/* The good way */
.selector {
    border-radius: 5px;
    box-shadow: 0 1px 2px rgba(0,0,0,.15);
}
```

## Shorthand notation
Strive to limit use of shorthand declarations to instances where you must explicitly set all the available values. Common overused shorthand properties include:

* `padding`
* `margin`
* `font`
* `background`
* `border`
* `border-radius`

Often times we don't need to set all the values a shorthand property represents. For example, HTML headings only set top and bottom margin, so when necessary, only override those two values. Excessive use of shorthand properties often leads to sloppier code with unnecessary overrides and unintended side effects.

The Mozilla Developer Network has a great article on [shorthand properties](https://developer.mozilla.org/en-US/docs/Web/CSS/Shorthand_properties) for those unfamiliar with notation and behavior.

```css
/* The bad way */
.selector {
    margin: 0 0 10px;
    background: red;
    background: url("image.jpg");
    border-radius: 3px 3px 0 0;
}

/* The good way */
.selector {
    margin-bottom: 10px;
    background-color: red;
    background-image: url("image.jpg");
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
```

However, do not take this as a rule to never use shorthand notations. If what yo uwant to write can be written in a simpeler way by using the shorthand notation, use it.

```css
/* The bad way */
.selector {
    border-width: 1px;
    border-style: solid;
    border-color: #000;
}

/* The good way */
.selector {
    border: 1px solid #000;
}
```