<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'vivekbhadula2000@gmail.com';

    $email_subject = 'New Form Submission';

    $email_body = 'Name : $name.\n'.
                    'Phone : $phone.\n'.
                        'Email : $visitor_email.\n'.
                            'Message: $message.\n';

    $to = 'vivekbhadula201420@gmail.com';

    $headers = 'From : $email_from \r\n';

    $headers . = 'Reply to : $visitor_email \r\n';

    mail($to, $email_subject, $email_body, $headers);

    header('Location : index.html');

?>