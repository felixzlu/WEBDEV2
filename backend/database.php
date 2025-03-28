<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: database.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<?php
/**This code include the database credentials from an external file  */
    require_once('db_credentials.php');
/***This code will establish a connection to the mysql database using the credentials from the db_credentials.php
 * @return mysqli returns the database connection object.
 */
    function db_connect() {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        confirm_db_connect();//This ensures the connection was successful
        return $connection;
    }
/***This closes the database connection
 * @param mysqli $ connection , the database connection to close
 */
    function db_disconnect($connection) {
        if(isset($connection)) {
            mysqli_close($connection);
        }
    }
/***This will ensures the database connection was successful, if the connection
 *fails, it outputs an error message and stops the script execution.
 */
    function confirm_db_connect() {
        if(mysqli_connect_errno()) {
            $msg = "Database connection failed: ";
            $msg .= mysqli_connect_error();
            $msg .= " (" . mysqli_connect_errno() . ")";
            exit($msg);
        }
    }
/***This confirms that the query is valid, if the query fails, the script terminates with an error message. */
    function confirm_result_set($result_set) {
        if (!$result_set) {
    	    exit("Database query failed.");
        }
    }

?>
