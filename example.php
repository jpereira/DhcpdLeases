<?php
/**
 *  This file is part of https://github.com/jpereira/php-dhcpdleases/
 *
 *    php-dhcpdleases is free software: you can redistribute it and/or modify it under the terms
 *  of the GNU Lesse General Public License as published by the Free Software Foundation, either
 *  version 3 of the License, or (at your option) any later version.
 *
 *  php-dhcpdleases is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 *  without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *  See the GNU Lesse General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesse General Public License
 *  along with php-dhcpdleases.
 *  If not, see <http://www.gnu.org/licenses/>.
 *
 *  Copyright (C) 2014, Jorge Pereira <jpereiran@gmail.com>
 */
require_once("class.DhcpdLeases.php");

// main()
$dl = new DhcpdLeases("dhcpd.leases.sample");

header("Content-Type: application/json");

if ($dl->process() < 1) {
    header("HTTP/1.0 404 Not Found", true, 404);
    echo "{ \"status\": \"error\", \"msg\": \"not found\" }";
} else {
    echo $dl->GetResultJson();
}
?>

