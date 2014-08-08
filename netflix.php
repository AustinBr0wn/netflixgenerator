<?php
$text = file_get_contents('http://www.linkhere.com/netflix.txt');
$textArray = explode("\n", $text);
$randArrayIndexNum = array_rand($textArray);
$randPhrase = $textArray[$randArrayIndexNum];
?>
//You can change the background and text color here.
<body bgcolor='black' text='yellow'>
<center><h1>
<?php echo $randPhrase; ?>
</center></h1>
<center><h1>
Made by Austin Brown http://austinbr0wn.com

Refresh the page to get a new account, if some don't work refresh the page! I will be getting fresh ones and trashing the non working ones please email me the non-working ones for a free one!
</center></h1>

<div class="afs_ads">&nbsp;</div>
<script>
(function() {
    var message = "We've detected that you have an ad blocker enabled! Please enable it and help support our work!";

        // Define a function for showing the message.
        // Set a timeout of 2 seconds to give adblocker
        // a chance to do its thing
        var tryMessage = function() {
            setTimeout(function() {
                if(!document.getElementsByClassName) return;
                var ads = document.getElementsByClassName('afs_ads'),
                    ad  = ads[ads.length - 1];

                if(!ad
                    || ad.innerHTML.length == 0
                    || ad.clientHeight === 0) {
                    alert(message);
                    //window.location.href = '[URL of the donate page. Remove the two slashes at the start of thsi line to enable.]';
                } else {
                    ad.style.display = 'none';
                }

            }, 2000);
        }

        /* Attach a listener for page load ... then show the message */
        if(window.addEventListener) {
            window.addEventListener('load', tryMessage, false);
        } else {
            window.attachEvent('onload', tryMessage); //IE
        }
})();
</script>
If you like my scripts send me some Bitcoin :) 1N61RWWVdNssE41JHXDZtRGw6trYmZXzvo
