<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Mysql Data Types</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body class="parent">

<div class="fluid-container">
    <div class="container">

        <dviv class="row text-center">
            <h1 class="white-text">Mysql Data Types</h1>
        </dviv>

        <div class="row">
            <div class="col-md-10 col-md-offset-1 types">

                <!-- BEGIN First row -->
                <div class="row">
                    <div class="col-md-12 title text-center top-radius">
                        <h3>Numeric types</h3>
                    </div>

                    <!-- BEGIN Int -->
                    <div class="col-md-4 yellow type text-center">
                        <div class="col-md-12">
                            <h4><strong>INT</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>SIGNED:</strong> from <strong>-2147483648</strong> to <strong>2147483647</strong></p>
                            </div>
                            <div class="row">
                                <p><strong>UNSIGNED:</strong> from <strong>0</strong> to <strong>4294967295</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- END Int -->

                    <!-- BEGIN Tinyint -->
                    <div class="col-md-4 blue-grey type text-center">
                        <div class="col-md-12">
                            <h4><strong>TINYINT</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>SIGNED:</strong> from <strong>-128</strong> to <strong>127</strong></p>
                            </div>
                            <div class="row">
                                <p><strong>UNSIGNED:</strong> from <strong>0</strong> to <strong>255</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- END Tinyint -->

                    <!-- BEGIN Smallint -->
                    <div class="col-md-4 light-blue type text-center">
                        <div class="col-md-12">
                            <h4><strong>SMALLINT</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>SIGNED:</strong> from <strong>-32768</strong> to <strong>32767</strong></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>UNSIGNED:</strong> from <strong>0</strong> to <strong>65535</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- END Smallint -->
                </div>
                <!-- END First row -->

                <!-- BEGIN Second row -->
                <div class="row">
                    <!-- BEGIN Mediumint -->
                    <div class="col-md-6 green type text-center">
                        <div class="col-md-12">
                            <h4><strong>MEDIUMINT</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>SIGNED:</strong> from <strong>-8388608</strong> to <strong>8388607</strong></p>
                            </div>
                            <div class="row">
                                <p><strong>UNSIGNED:</strong> from <strong>0</strong> to <strong>16777215</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- END Mediumint -->

                    <!-- BEGIN Bigint -->
                    <div class="col-md-6 violet type text-center">
                        <div class="col-md-12 text-center">
                            <h4><strong>BIGINT</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>SIGNED:</strong> from <strong>-9223372036854775808</strong> to <strong>9223372036854775807</strong></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>UNSIGNED:</strong> from <strong>0</strong> to <strong>18446744073709551615</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- END Bigint -->
                </div>
                <!-- END Second row -->

                <!-- BEGIN Third row -->
                <div class="row">

                    <!-- BEGIN Float -->
                    <div class="col-md-4 red type text-center">
                        <div class="col-md-12 text-center">
                            <h4><strong>FLOAT(M,D)</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>M - display length (10 default)</strong></p>
                                <p><strong>D - number of decimals (2 default)</strong></p>
                                <p><strong>Note:</strong> that type cannot be unsigned.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END Float -->

                    <!-- BEGIN Double -->
                    <div class="col-md-4 light-blue type text-center">
                        <div class="col-md-12">
                            <h4><strong>DOUBLE(M,D)</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>M - display length (16 default)</strong></p>
                                <p><strong>D - number of decimals (4 default). Can go up to 53</strong></p>
                                <p><strong>Note:</strong> that type cannot be unsigned.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END Double -->

                    <!-- BEGIN Decimal -->
                    <div class="col-md-4 blue-grey type text-center">
                        <div class="col-md-12">
                            <h4><strong>DECIMAL(M,D)</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <p><strong>M - display length (required)</strong></p>
                                <p><strong>D - number of decimals (required)</strong></p>
                                <p><strong>Note:</strong> that type cannot be unsigned.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END Decimal -->


                </div>
                <!-- END Third row -->

                <!-- BEGIN Fourth row -->
                <div class="row">

                    <div class="col-md-12 title text-center">
                        <h3>Date and time types</h3>
                    </div>

                    <div class="col-md-4 yellow type text-center">
                        <div class="col-md-12">
                            <h4><strong>DATE</strong></h4>
                            <div class="row">
                                <p><strong>FORMAT: YYYY-MM-DD</strong></p>
                            </div>
                            <div class="row">
                                <p><strong>BETWEEN: 1000-01-01</strong> and <strong>9999-12-31</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 violet type text-center">
                        <div class="col-md-12">
                            <h4><strong>DATETIME</strong></h4>
                            <div class="row">
                                <p><strong>FORMAT: YYYY-MM-DD HH:MM:SS</strong></p>
                            </div>
                            <div class="row">
                                <p><strong>BETWEEN: 1000-01-01 00:00:00</strong> and <strong>9999-12-31 23:59:59</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 light-green type text-center">
                        <div class="col-md-12">
                            <h4><strong>TIMESTAMP</strong></h4>
                            <div class="row">
                                 <p><strong>FORMAT: YYYYMMDDHHMMSS</strong></p>
                            </div>
                            <div class="row">
                                <p><strong>Between: January 1, 1970</strong> and sometime in <strong>2037</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 green type text-center">
                        <div class="col-md-12">
                            <h4><strong>TIME</strong></h4>
                            <div class="row">
                                <p>Store the time in <strong>HH:MM:SS</strong> format
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 light-blue type text-center">
                        <div class="col-md-12">
                            <h4><strong>YEAR(M)</strong></h4>
                            <div class="row">
                                <p><strong>M - year digits (2 or 4)</strong></p>
                            </div>
                            <div class="row">
                                <p><strong>YEAR(2):</strong> from <strong>1970</strong> to <strong>2069</strong> (<strong>70</strong> to <strong>69</strong>)</p>
                            </div>
                            <div class="row">
                                <p><strong>YEAR(4):</strong> from <strong>1901</strong> to <strong>2155</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Fourth row -->

                <div class="row">

                    <div class="col-md-12 title text-center">
                        <h3>String types</h3>
                    </div>


                    <div class="col-md-6 yellow type">
                        <div class="col-md-12 text-center">
                            <h4><strong>CHAR(M)</strong></h4>
                            <div class="row">
                                <p>Fixed length string between <strong>1</strong> and <strong>255</strong> chars
                            </div>
                            <div class="row">
                                <p><strong>M - length (default 1)</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 blue-grey type">
                        <div class="col-md-12 text-center">
                            <h4><strong>VARCHAR(M)</strong></h4>
                            <div class="row">
                                <p>Variable length string between <strong>1</strong> and <strong>255</strong> chars
                            </div>
                            <div class="row">
                                <p><strong>M - length (required)</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 teal type">
                        <div class="col-md-12 text-center">
                            <h4><strong>BLOB or TEXT</strong></h4>
                            <div class="row">
                                <p>Field with a max length of <strong>65535</strong> characters</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 violet type">
                        <div class="col-md-12 text-center">
                            <h4><strong>TINYBLOB or TINYTEXT</strong></h4>
                            <div class="row">
                                <p>Field with a max length of <strong>255</strong> characters</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 red type">
                        <div class="col-md-12 text-center">
                            <h4><strong>MEDIUMBLOB or MEDIUMTEXT</strong></h4>
                            <div class="row">
                                <p>Field with a max length of <strong>16777215</strong> characters</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 light-blue type bottom-left-radius">
                        <div class="col-md-12 text-center">
                            <h4><strong>LONGBLOB or LONGTEXT</strong></h4>
                            <div class="row">
                                <p>Field with a max length of <strong>4294967295</strong> characters</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 green type bottom-right-radius">
                        <div class="col-md-12 text-center">
                            <h4><strong>ENUM</strong></h4>
                            <div class="row">
                                <p>An enumeration</p>
                            </div>
                            <div class="row">
                                <p><strong>Example: ENUM('A', 'B', 'C')</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center footer">Created with &hearts; by <a href="http://alexbugarin.xyz">Alex</a></div>
        </div>

    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
