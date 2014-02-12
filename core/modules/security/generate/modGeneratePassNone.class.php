<?php
/* Copyright (C) 2006-2011 Laurent Destailleur <eldy@users.sourceforge.net>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 * or see http://www.gnu.org/
 */

/**
 *      \file       htdocs/core/modules/security/generate/modGeneratePassNone.class.php
 *      \ingroup    core
 *      \brief      File to manage no password generation.
 */

require_once DOL_DOCUMENT_ROOT .'/core/modules/security/generate/modules_genpassword.php';


/**
 *	    \class      modGeneratePassNone
 *		\brief      Class to generate a password according to rule 'no password'
 */
class modGeneratePassNone extends ModeleGenPassword
{
	var $id;
	var $length;

	var $db;
	var $conf;
	var $lang;
	var $user;


	/**
	 *	Constructor
	 *
	 *  @param		DoliDB		$db			Database handler
	 *	@param		Conf		$conf		Handler de conf
	 *	@param		Translate	$langs		Handler de langue
	 *	@param		User		$user		Handler du user connecte
	 */
	function __construct($db, $conf, $langs, $user)
	{
		$this->id = "none";
		$this->length = 0;

		$this->db=$db;
		$this->conf=$conf;
		$this->langs=$langs;
		$this->user=$user;
	}

	/**
	 *		Return description of module
	 *
 	 *      @return     string      Description of text
	 */
	function getDescription()
	{
		global $langs;
		return $langs->trans("PasswordGenerationNone");
	}

	/**
	 * 		Return an example of password generated by this module
	 *
 	 *      @return     string      Example of password
	 */
	function getExample()
	{
		return $this->langs->trans("None");
	}

	/**
	 * 		Build new password
	 *
 	 *      @return     string      Return a new generated password
	 */
	function getNewGeneratedPassword()
	{
		return "";
	}

	/**
	 * 		Validate a password
	 *
	 *		@param		string	$password	Password to check
 	 *      @return     int					0 if KO, >0 if OK
	 */
	function validatePassword($password)
	{
		return 1;
	}

}

?>
