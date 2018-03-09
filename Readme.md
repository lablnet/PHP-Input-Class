# PHP input class
## Feature

 1. Supported method get,post,put,PATCH
 2. Clean input method
 3. check whether request is ajax or not
 4. Wordwrap
 5. check whether form submit or not
 6. Restore line breaks method

## TODO
Add method for emojies convertor

# Simple Example 
## for more detail see index.php
    <?php 
        require_once 'init.php';
        echo input('q');
     ?>
     <form action='' method='post'> 
        	<input type='text' name='q' ?>
     </form>

 
