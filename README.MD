This is a custom Moodle Block
Its function is to list all payments with status Not Paid
It checks the user profile field fees for a list of payments.
This field has a string that is JSON encoded with payments.
As soon as a payment is successfully made the corresponding payment is marked paid.
Only payments that are not paid are listed.
