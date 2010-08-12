<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Field_Picker_ft extends EE_Fieldtype {
	
	var $info = array(
		'name'		=> 'Freeform Field Picker',
		'version'	=> '1.0'
	);
	
	function Field_Picker_ft() 
	{
		parent::EE_Fieldtype();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Display Field on Publish
	 *
	 * @access	public
	 * @param	existing data
	 * @return	field html
	 *
	 */
	function display_field($data)
	{
		return $data;
	}
	
	// --------------------------------------------------------------------
		
	/**
	 * Replace tag
	 *
	 * @access	public
	 * @param	field contents
	 * @return	replacement text
	 *
	 */
	function replace_tag($data, $params = array(), $tagdata = FALSE)
	{
		static $script_on_page = FALSE;
		$ret = '';

		return $data;
	
	}
	

	/**
	 * Save Global Settings
	 *
	 * @access	public
	 * @return	global settings
	 *
	 */
	function save_global_settings()
	{
		return array_merge($this->settings, $_POST);
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Display Settings Screen
	 *
	 * @access	public
	 * @return	default global settings
	 *
	 */
	function display_settings($data)
	{
		return $data;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Save Settings
	 *
	 * @access	public
	 * @return	field settings
	 *
	 */
	function save_settings($data)
	{
		return $data;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Install Fieldtype
	 *
	 * @access	public
	 * @return	default global settings
	 *
	 */
	function install()
	{
		return array();
	}
	
	// --------------------------------------------------------------------
	function display_cell( $data )
{

$query = $this->EE->db->query("SELECT name, label FROM exp_freeform_fields");
$freeFormFields = "";
foreach ($query->result() as $row) {
	if ($data == $row->name) {  $sVal = "selected='selected'";} else {$sVal = "";}
	$freeFormFields .= "<option " . $sVal. " value='" . $row->name. "'>" . $row->label . "</option>";
}
 $printData = '<select name="'.$this->cell_name.'"  >' . $freeFormFields  . '</select>';
  
   return $printData;

  
  }
	
}

/* End of file ft.field_picker.php */
