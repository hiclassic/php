Conversation opened. 1 unread message.

Skip to content
Using Gmail with screen readers
1 of 335
Fwd:
Inbox

mahamudul hasan sifat
Attachments
10:43 AM (56 minutes ago)
to me



---------- Forwarded message ---------
From: Osman Goni <osman98th@gmail.com>
Date: Wed, Jul 2, 2025 at 10:28 AM
Subject: Fwd:
To: <mahamudul7332@gmail.com>, <amiislam577@gmail.com>, <mahidulkabir8@gmail.com>




---------- Forwarded message ---------
From: Rafiaakter Bonna <rafiaakterbonna@gmail.com>
Date: Wed, Jul 2, 2025 at 10:26 AM
Subject: Re:
To: osman98th@gmail.com <osman98th@gmail.com>




On Sat, Jun 21, 2025 at 12:41 AM Rafiaakter Bonna <rafiaakterbonna@gmail.com> wrote:
Goni vaiya JavaScript note dilam dekhe note kore felen 

On Thu, Apr 24, 2025 at 9:42 AM Rafiaakter Bonna <rafiaakterbonna@gmail.com> wrote:


On Thu, Apr 24, 2025 at 8:54 AM Rafiaakter Bonna <rafiaakterbonna@gmail.com> wrote:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style=" width: 600px;background-color: lavenderblush;
    float: left;">
        <form action="">
            <fieldset>
                <legend>Registration Form</legend>
                ID : <br>
                <input type="text"> <br><br>
                Name : <br>
                <textarea name="" id=""></textarea> <br><br>
                Round : <br>
                <select name="" id="">
                    <option value="">65</option>
                    <option value="">64</option>
                    <option value="">60</option>
                </select> <br> <br>
                Gender :
                <input type="radio" name="m"> Female
                <input type="radio" name="m"> Male
                <input type="radio" name="m"> Others <br> <br>
                Education : <br>
                <input type="checkbox" name="" id="">SSC
                <input type="checkbox" name="" id="">HSC <br> <br>
                <input type="submit" value="submit">
                <input type="reset" value="reset">

                
            </fieldset>
        </form>
    </div>
</body>
</html>
 8 Attachments
  •  Scanned by Gmail
<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Generator</title>
</head>
<body>

    <h2>Generate Fibonacci Series</h2>

    <form method="post" action="">
        <h3>Enter how many numbers you want: </h3>
        <input type="number" name="count" min="1" required>
        <input type="submit" name="generate" value="Generate">
    </form>

    <?php
    if (isset($_POST['generate'])) {
        $count = $_POST['count'];
        
        $num1 = 0;
        $num2 = 1;

        echo "<h3>Fibonacci Series of $count numbers:</h3>";
        echo "<p>";

        for ($i = 0; $i < $count; $i++) {
            echo $num1 . " ";
            $next = $num1 + $num2;
            $num1 = $num2;
            $num2 = $next;
        }

        echo "</p>";
    }
    ?>

</body>
</html>