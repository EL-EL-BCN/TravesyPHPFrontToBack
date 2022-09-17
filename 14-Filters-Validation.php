<?php 

    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGEX
    # FILTER_VALIDATE_URL

    # FILTER_SANITIZE_EMAIL
    # FILTER_SANITIZE_ENCODED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL


    // Check for POSTed Data
    // GET - Send Data in URL
    // if(filter_has_var(INPUT_GET, 'data')) {
    // POST - send data in HTTP header 
    /*
    if(filter_has_var(INPUT_POST, 'data')) {
        echo 'Data Found';
    } else {
        echo 'No Data';
    }
    


    #### VALIDATE AND FILTER AN EMAIL

    if(filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];

        // Remove illegal characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo $email . "<br>";

        // Validate Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    }
    */

    #### FILTER AN INTEGER
    /*
    $var = $_POST['data'];

    if(filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var . ' is a number';
    } else {
        echo $var . ' is NOT a number';
    }
    */

    #### SANITISE AN INTEGER
    /*
    $var = $_POST['data'];
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
    // This will remove any letters from the input and only keep the numbers.
    */

    #### SANITISE SPECIAL CHARACTERS
    /*
    $var = $_POST['data'];
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
    // Thi stops someone from inserting malicious code in a form such as script tags with something inside that could damage or site. It just turns them into harmless characters rather than executing any code that is in the form.
    */

    /*
    #### SANITISE USING ARRAY
    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters));

    // Here we are using an array to filter two inputs:
    // data1 must be a valid email
    // data2 must be a number between 1 and 100
    */

    $arr = array(
        "name" => "Brad travesy",
        "age" => "35",
        "email" => "brad@gmail.com"
    );

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));






?>
<!-- Form Method is get or post -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>