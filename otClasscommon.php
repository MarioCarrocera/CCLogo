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
	
	
	
	Email:
	marioc@mundogenesys.com
	mario.carrocera@hotmail.com
	
	Fecha de Ultima Modificacion:
	 1 / 1  / 2021
	 
	Release: 3
******************************************************************************************/
class CCLicense 
{public $url;public $logo;public $err;private $adaptations;private $commercial;private $size;function furl() {if (($this->adaptations>=1) and ($this->adaptations<=3) and ($this->commercial>=1) and ($this->commercial<=2) and ($this->size>=1) and ($this->size<=2)){$Vurl='</a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/licencia/4.0/">Creative Commons Attribution 4.0 International License</a>.';$Vref='<a rel="license" href="http://creativecommons.org/licenses/licencia/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/licencia/4.0/tamanio.png" />';if ($this->size == 1){$vtamanio = '88x31';} else {$vtamanio = '80x15';}if (($this->adaptations == 1) and ($this->commercial == 1)){ $vlicencia = 'by'; }if (($this->adaptations == 2) and ($this->commercial == 1)){ $vlicencia = 'by-nd'; }if (($this->adaptations == 3) and ($this->commercial == 1)){ $vlicencia = 'by-sa'; }if (($this->adaptations == 1) and ($this->commercial == 2)){ $vlicencia = 'by-nc'; }if (($this->adaptations == 2) and ($this->commercial == 2)){ $vlicencia = 'by-nc-nd'; }if (($this->adaptations == 3) and ($this->commercial == 2)){ $vlicencia = 'by-nc-sa'; }$Vref = str_replace("licencia" , $vlicencia ,$Vref);$this -> url =	str_replace("licencia" , $vlicencia ,$Vurl);$this -> logo =	str_replace("tamanio" , $vtamanio ,$Vref);$this -> err = 'None';return 0;} else {$this -> url =	'Error';$this -> logo =	'Error';$this -> err = 'C010M001';return 1;}}function __construct($adaptations, $commercial, $size) {$this->adaptations = $adaptations;$this->commercial = $commercial;$this->size = $size;return $this->furl();}function change_adaptations($adaptations){$this->adaptations = $adaptations;return $this->furl();}function change_commercial($commercial){$this->commercial = $commercial;return $this->furl();}function change_size($size){$this->size = $size;return $this->furl();}}
?>