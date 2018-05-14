<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 archifun plugin for GLPI
 Copyright (C) 2009-2016 by the archifun Development Team.

 https://github.com/InfotelGLPI/archifun
 -------------------------------------------------------------------------

 LICENSE
      
 This file is part of archifun.

 archifun is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 archifun is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with archifun. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

include ('../../../inc/includes.php');

$plugin = new Plugin();
if ($plugin->isActivated("environment")) {
   Html::header(PluginArchifunFuncarea::getTypeName(2)
                  ,'',"admin","pluginenvironmentdisplay","archifun");
} else {
   Html::header(PluginArchifunFuncarea::getTypeName(2), '', "admin","pluginarchifunmenu");
}
$funcarea = new PluginArchifunFuncarea();

if ($funcarea->canView() || Session::haveRight("config", UPDATE)) {
   Search::show('PluginArchifunFuncarea');
} else {
   Html::displayRightError();
}

Html::footer();

?>