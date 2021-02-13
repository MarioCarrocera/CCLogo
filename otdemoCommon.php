<?php
/******************************************************************************************

	Design and programming by Mario Carrocera Menendez
	copyright @ 2003-2021 Mario Carrocera Menendez
	copyright @ 2019-2021 Mundo Genesys de IT (On Time)
	
	License:
	Attribution-NonCommercial-ShareAlike 4.0 International ( https://creativecommons.org/licenses/by-nc-sa/4.0/ )
	
	Disclaimer:
	
	This software is provided by the copyright holders and contributors "as is" and any express or implied warranties, including, but not limited to, the implied warranties of merchantability and fitness for a particular purpose are disclaimed. In no event shall the copyright owner or contributors be liable for any direct, indirect, incidental, special, exemplary, or consequential damages (including, but not limited to, procurement of substitute goods or services; loss of use, data, or profits; or business interruption) however caused and on any theory of liability, whether in contract, strict liability, or tort (including negligence or otherwise) arising in any way out of the use of this software, even if advised of the possibility of such damage.
	
	if requires a specific modification or improvement it may have a cost, for any doubt or comment I am at your service in the email

	Content specification:

	Obtain the address and logos of the Creative Commons License that applies to your software, it only requires that you indicate what degree of adaptation you allow to your software and if you license it for commercial use


	Email:
	marioc@mundogenesys.com
	mario.carrocera@hotmail.com
	marcartools@gmsil.com
	
	Fecha de Ultima Modificacion:
	 10 / 2  / 2020
	Release: 3.7
******************************************************************************************/


ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);
include_once('otClasscommon.php');

$license = new CCLicense(1,1,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(1,1,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(1,2,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(1,2,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(2,1,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(2,1,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(2,2,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(2,2,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(3,1,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(3,1,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(3,2,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(3,2,2);
echo $license->logo; 
echo $license->url; 
?>

