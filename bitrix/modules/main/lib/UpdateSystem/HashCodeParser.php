<? namespace Bitrix\Main\UpdateSystem;$GLOBALS['____495035801']= array(base64_decode('Ym'.'FzZTY0X2R'.'lY29kZQ=='),base64_decode(''.'dW'.'5'.'zZXJpYWx'.'pem'.'U'.'='),base64_decode('b3B'.'lbn'.'N'.'z'.'b'.'F92ZXJpZnk='),base64_decode('dW5'.'zZXJp'.'YWxpemU='));if(!function_exists(__NAMESPACE__.'\\___879544250')){function ___879544250($_1982252356){static $_941883896= false; if($_941883896 == false) $_941883896=array(''.'YWxsb'.'3dlZF9j'.'b'.'G'.'Fzc2Vz','aW5'.'mbw='.'=','c2lnbmF0'.'dXJl','c'.'2hhM'.'jU2V2l0aF'.'JTQUVuY3J5cHR'.'pb24=','aW5mb'.'w'.'==','YW'.'xsb3dlZF9'.'j'.'bG'.'Fzc2Vz','RXJ'.'yb'.'3IgdmV'.'yaWZ5'.'IG'.'9wZ'.'W5'.'zc2wgW0hD'.'UFA'.'wMV0=','LS0tLS1CR'.'UdJTiBQV'.'U'.'JMSU'.'Mg'.'S0VZLS0'.'tL'.'S0KTUl'.'JQklqQU5CZ2txaGtp'.'Rz'.'l3MEJ'.'BU'.'U'.'VGQUFPQ0FROEFN'.'SUlCQ2dLQ0FRRUE2aG'.'N'.'4SXF'.'pa'.'XRVWlJN'.'d1'.'lpdWtTVQpo'.'OX'.'h'.'h'.'NWZFRFlsY2NiVz'.'N'.'2ajhB'.'d'.'mEzNXZLcV'.'ZONGl'.'COXRxQ'.'1g3'.'alU4NnFBYT'.'J2MzdtYl'.'RG'.'NnBjWTZIR'.'1BBaF'.'JGCmJ'.'wbndYT1k'.'3'.'W'.'Ud4QjFuU0tadkUrak'.'FSYmlMTEJnW'.'j'.'FjR'.'zZaMGR1d'.'TVpMVhoc'.'ElS'.'TD'.'F'.'j'.'TjBIaDVmZXpwalh'.'DNk'.'8KWXh'.'Z'.'cT'.'BuVG'.'9IV'.'Gp5'.'UmIxeW'.'N6d3RtaVJ3WXF1Z'.'FhnL3hXe'.'HBwcXd'.'GMHRVbGQzUUJyM2k2OEI4anFNbStUa'.'mR'.'lQ'.'Qp1L2Z'.'nMU'.'owSk'.'d0UjQv'.'ek'.'s0RzdZS'.'k52aG11'.'aHJSR2t5'.'QV'.'F'.'WMFRW'.'dTVMRXV'.'n'.'U3hqQ'.'XBSb'.'Ul'.'KUU5IUU1LMEVoOTN3Ck1'.'ab0'.'Zv'.'UHA5U'.'2dKN0dhRlU4a3p'.'T'.'K0VRY2'.'50WX'.'hiMU5IVU'.'pVSXZ'.'U'.'ZGl'.'1Ul'.'VlRktseVRke'.'El'.'ySDZDTC8vYXB'.'NS'.'DMKRndJREF'.'RQUIK'.'LS0'.'t'.'LS1FTkQgU'.'FVCTElDIEtFWS0tLS0t');return base64_decode($_941883896[$_1982252356]);}}; use Bitrix\Main\Application; use Bitrix\Main\Security\Cipher; use Bitrix\Main\Security\SecurityException; class HashCodeParser{ private string $_844138573; public function __construct(string $_844138573){ $this->_844138573= $_844138573;}  public function parse(){ $_180552132= $GLOBALS['____495035801'][0]($this->_844138573); $_180552132= $GLOBALS['____495035801'][1]($_180552132,[___879544250(0) => false]); if($GLOBALS['____495035801'][2]($_180552132[___879544250(1)], $_180552132[___879544250(2)], $this->__1913666656(), ___879544250(3)) == round(0+1)){ $_1589324135= Application::getInstance()->getLicense()->getHashLicenseKey(); $_1944840627= new Cipher(); $_1560819413= $_1944840627->decrypt($_180552132[___879544250(4)], $_1589324135); return $GLOBALS['____495035801'][3]($_1560819413,[___879544250(5) => false]);} throw new SecurityException(___879544250(6));} private function __1913666656(): string{ return ___879544250(7);}}?>