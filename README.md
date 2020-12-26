The code uses PHP to implement a gate-like-logic authentication. No framework.
>Suppose you have an index page that contains links to other service pages that
>require the user to be logged in in order to access them. In addition, you have a login link that 
>a user can use to login to the application without visiting the service pages.
>When accessing the service pages, you want the user to login first then proceed 
>to the page they intended.   
In the *core.php*, the login() function uses session IDs to check for this condition

####Usage
>1. Create a new service page and place it in the pages directory or an appropriate directory acoording to your project's structure.    
>2. Append the link to the service page in the *index.php* and add an id to the link
>e.g. <a href="service.php?id=20"
>3. In _core.php_, append the page's id as a case conditional in the switch case block
>4. Note: You must follow the format used in the *book.php* to create a service page

And you are good to go! :rocket: