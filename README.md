### CS4550 - Web Development
---

For the course, we were asked to explain each of our files.
I have added comments to explain individual PHP functions, but I will go into further "file-wide" detail here.

# Index.php
The index page is the home page for the site. It uses PHP to include the navbar and the reservation form (which are two elements included elsewhere in the site as well).

I use a slideshow -> 3 column layout, with a horizontal navbar at the top.

# Reservations.php
This is the reservation explanation and lookup page. Text has been included to talk about "our great reservations" and "why you should reserve" etc etc.

PHP gives this page a dual functionality. I do a check to see if the "email" post var isset, and if so I display different text than if it isn't.

If there is an email, I do a lookup for all reservations with that email, and display them.

If there isn't one, I give the general "make a reservation" speech.

# Events.php and Contact.php

Both of these are mostly empty. They were only designed to remove dead links.

They both use PHP to include the navbar, but that is their own function at the moment.

# Reserve.php

This file is the action of the reservation form. It gathers all the vars sent via post, sends an email to both myself (acting as the club owner) and the client, and adds the reservation to the database. If it fails to do these things, it alerts the user and asks them to call in.

The database insert statment has been made with mysqli and prepared statements, making it strong against sql injections and escape characters.

# Navbar.php and Form.php

Both files are designed to be included into another file. Navbar is included on every page and form is included on the index page and the reservations page.

Navbar also has the functionality to check for the current var set in php, and apply a class to the "current" page based on that.