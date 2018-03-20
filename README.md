# module-template

A template for putting together RACHEL modules.

## So you want to make a RACHEL module?

Great! There are people all around the world using RACHEL right now, and
your work will benefit them directly. The good news is that it's easy
to do, and there are people happy to help bring your content to
[our repository](http://dev.worldpossible.org/cgi/rachelmods.pl).

## What is a RACHEL module?

A RACHEL module is just an offline website. Most often it is a simple directory
of HTML files, images, videos, and other related resources. The only strict
requirements are that it functions without an internet connection, and that
it includes [a special **rachel-index.php** file that can be included in the
RACHEL index](http://dev.worldpossible.org/cgi/sample_wrap.php?moddir=en-ebooks).
This PHP file is easy to make using the template we provide in this repository.

It is also possible for RACHEL modules to be based on the ZIM file format,
or to include PHP code and SQLite database files, which are covered in
**Advanced Module Creation** below.

## What makes a great RACHEL module?

The best RACHEL modules provide [a friendly interface and enticing presentation
of unique educational content](http://dev.worldpossible.org/mods/en-ebooks/index.html).
The target audience is mostly children, people who are less familiar with
technology, and teachers and instructors with limited time, so usability and
engagement are of utmost importance. The best content in the world won't make a
difference if people aren't excited and able to use it!

To that end, some recommendations:

 * Provide an browsable index of content, preferably organized into
useful categories.

 * Add search capabilities using RACHEL search. Make the search available
from every page.

 * Use simple, low-overhead HTML, css, and javascript. Aim for compatability
with old, limited systems: many RACHEL users are on older browsers, slow
processors, and small screens. Avoid Flash, and use
[video.js](http://videojs.com/) for embeded video.

 * Compress images, audio, and video to minimum size while retaining
usability.  Not only does it save storage space but it reduces server, network,
and client load - all of which tend to be in short supply. Think of the
internet in 1999. 

This is particularly important for video -
[here are our recommendations](../../wiki/Video-Quality-Guide).

## What licenses are appropriate?

Content submitted to RACHEL must either be in the public domain or under an
open license such as Creative Commons, GPL, etc. Whatever the license, please
follow all the terms, and include a viewable copy in the module itself.
As a courtesy, please provide attribution even if it is not required.

Please do not submit content that is not licensed for redistribution as we will
have to remove it. If you find any RACHEL content that you believe is not
properly licensed, please LET US KNOW.

## How do I get started?

First: download this repository from github.

  `git clone https://github.com/rachelproject/module-template.git`

Inside you'll find the **rachel-index.php** template. This is the piece of PHP
that gets included on the front page of RACHEL. As a bare minimum, this is the
only part you have to do. If you don't fill out the rachel-index.php template,
it can't be displayed in RACHEL. Don't worry -- if you've ever edited HTML
before it's very easy. Just open the file in a text editor and follow the
instructions in the comments there.

You'll need to rename your directory from module-template to whatever name
you want for your module. By convention, the name must start with the two
letter language code and a hyphen. Thus we have
[en-wikipedia](http://dev.worldpossible.org/cgi/viewmod.pl?module_id=20) and
[fr-wikipedia](http://dev.worldpossible.org/cgi/viewmod.pl?module_id=77)
for English and French, respectively. The name must be unique, so check
[our module repository](http://dev.worldpossible.org/cgi/rachelmods.pl) first.

*That's it for now - but read on if you want to get fancy.*

## Advanced Module Creation

### PHP/SQLite Modules

Since the RACHEL system comes with PHP and SQLite installed, there is really
no limit to how creative you can get. You can create fully feautred dynamic
websites with any feature you like, as long as it can run offline. We will
leave the actual development up to you, but here are some examples:

* [World Map](http://dev.worldpossible.org/cgi/viewmod.pl?module_id=100) --
  uses [Leaflet](http://leafletjs.com/) to provide dynamic mapping and a
  custom Ajax/PHP/SQLite city search feature.

* [wikiHow](http://dev.worldpossible.org/cgi/viewmod.pl?module_id=102) --
  uses a custom Ajax/PHP/SQLite for search suggestions and results.

* [File Share](http://dev.worldpossible.org/cgi/viewmod.pl?module_id=60) --
  a simple file upload program so non-technical people can put their own
  files on RACHEL.  

### Zim-based modules

One of the more advanced types of modules you can build is based off
of a [ZIM file](https://en.wikipedia.org/wiki/ZIM_\(file_format\)). These
are pre-packaged websites in a compressed, searchable format. They are
accessed using a program called [Kiwix](http://wiki.kiwix.org/wiki/Software),
which is included as part of the RACHEL build. All you have to do is put
the contents of the ZIM file in the right place in your module directory:

* All related zim files go in the subdirectory **data/content**
  -- a single offline website can contain one or many ZIM files,
  for example: wiki.zim, wiki.zima, wiki.zimb, etc.

* The ZIM's index must go in the subdirectory **data/index**
  -- the index will be a directory named something like wiki.idx

This loosely mirrors the directory structure of ZIM packages anyway. You can
download and refer to one of the existing ZIM-based RACHEL modules like
[Wikipedia for Schools](http://dev.worldpossible.org/cgi/viewmod.pl?module_id=50) to see this in action. It also demonstrates how to connect your
rachel-index.php to the built-in Kiwix search.

You can find [a full listing of ZIM files here](http://wiki.kiwix.org/wiki/Content_in_all_languages). Be sure to download the "Pre-indexed" versions. You can
discard everything except for what's in data/content and data/index. The RACHEL system
already has the Kiwix software, and will automatically build library files as
needed.

## RACHEL Search

There are custom tools for spidering your module's content and building an
efficient search index. These tools are unfortunately not on github yet,
nor are they documented, but you can take a look at and possibly copy them
from the search directory on the
[wikiHow](http://dev.worldpossible.org/cgi/viewmod.pl?module_id=102) module.

*To be documented and published*
