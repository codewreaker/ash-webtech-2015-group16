> A class to interface with server side functions provided by a class adb. It consists of functions to perform add, delete and update personnel in a database.
# Introduction #

Also had login details. Interfaces with database to authenticate user logins in conjunction with an external file, loginScript.


# Details #
**T\_Personnel:**

**Fields**
_$str\_query
Stores the string defining the query to be run._

_query($str\_query)
Runs query on existing db connection.
If there is no connection it creates new connection. Returns true if query is successful, else false._

_fetch()
Returns on row from the current data set as associated array.
If there is an error it returns false._


**Methods**
_t\_personnel()
Constructor method._

_add\_personnel($pid, $f\_name,$l\_name, $username, $password, $position, $contact)
Connects to database and runs a query to add to a given table._

_update\_personnel($pid, $f\_name,$l\_name, $username, $password, $position, $contact)
Connects to database and runs a query to update data of a given entry._

_delete\_personnel($pid)
Connects to database and runs a query to delete an entry._

_get\_personnel($pid)
Connects to database and runs a query to retrieve the id of a particular user._


**Login**
**Fields**
_$user
Stores the values for usernames entered into text fields in the login form
$pass
Stores the values for passwords entered into text fields in the login form
$obj
An instance of the loginScript class.
**Methods**_Check()
A method that takes in the inputted usernames and
passwords and checks them against records in the database to find matches.

**Add personnel (also sign-up page)**
A view for adding personnel to a database via the t\_personnel functions