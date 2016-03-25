# module-template

A template for putting together RACHEL modules.

## So you want to make a RACHEL module?

Great! There are people all around the world using RACHEL right now, and
your work will benefit them directly. The good news is that it's easy
to do, and there are people happy to help bring your content to our repository.

### What is a RACHEL module?

A RACHEL module is just an offline website. Most often it is a simple directory
of HTML files, images, videos, and other related resources. The only strict
requirements are that it functions without an internet connection, and that
it includes [a special **rachelmod.html** file that can be included in the
RACHEL index](http://dev.worldpossible.org/cgi/sample_wrap.php?moddir=ebooks-en).
This HTML file is easy to make using the template we provide.

It is also possible for RACHEL modules to be based on the ZIM file format,
or to include PHP code and SQLite database files, which will be covered in
**Advanced Module Creation** below.

## What makes a great RACHEL module?

The best RACHEL modules provide [a friendly interface and enticing presentation
of unique educational content](http://dev.worldpossible.org/mods/ebooks-en/index.html).
The target audience is mostly children, people who are less familiar with
technology, and teachers and instructors with limited time, so usability and
engagement are of utmost importance. The best content in the world won't make a
difference if people aren't excited and able to use it!

To that end, some recommendations:

1. Provide an browsable index of content, preferably organized into
useful categories.

2. Add search capabilities using RACHEL search. Make the search available
from every page.

3. Use simple, low-overhead HTML, css, and javascript. Aim for compatability
with old, limited systems: many RACHEL users are on older browsers, slow
processors, and small screens. Avoid Flash, and use [video.js](http://videojs.com/)
for embeded video.

4. Compress images, audio, and video to minimum size while retaining
usability.  Not only does it save storage space but it reduces server, network,
and client load - all of which tend to be in short supply. Think of the
internet in 1999. 

This is particularly important for video -
[here are our recommendations](https://github.com/rachelproject/contentshell/issues/1).

## What licenses are appropriate?

Content submitted to RACHEL must either be in the public domain or under an
open license such as Creative Commons, GPL, etc. Whatever the license, please
follow all the terms. As a courtesy, please provide attribution even if it is
not required.

Please do not submit content that is not licensed for redistribution as we will
have to remove it. If you find any RACHEL content that you believe is not
properly licensed, please LET US KNOW.

## How do i get started?

First: download this repository from github.

  `git clone https://github.com/rachelproject/module-template.git`

Inside you'll find the "rachelmod.html" template.  This is the piece of html that
becomes part of the RACHEL index. As a bare minimum, this is the only part you
have to do. If you don't fill out the index.htmlf template, it can't be displayed
in RACHEL. Don't worry -- if you've ever edited HTML before it's very easy.
Just open the file in a text editor and follow the instructions in the comments
here.

*That's it for now - later we'll document how to add search functionality*

# Advanced Module Creation

We will document this later, but for now you can look at on of the ZIM based modules
like [Wikipedia for Schools](http://dev.worldpossible.org/cgi/viewmod.pl?module_id=50)
and emulate that.

