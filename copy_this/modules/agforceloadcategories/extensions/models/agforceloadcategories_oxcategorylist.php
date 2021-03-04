<?php

class agforceloadcategories_oxcategorylist extends agforceloadcategories_oxcategorylist_parent {

    /**
     * Force load full as default
     *
     * @var boolean
     */
    protected $_blForceFull = true;

    protected function _getSqlSelectFieldsForTree($sTable, $aColumns = null) // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $sFieldList = parent::_getSqlSelectFieldsForTree($sTable, $aColumns);

        $aExtraFields = \OxidEsales\Eshop\Core\Registry::getConfig()->getShopConfVar('aAdditionalCategoryFields', null, 'module:agforceloadcategories');

        foreach($aExtraFields as $field) {
            $sFieldList .= ", $sTable.$field as $field ";
        }

        return $sFieldList;
    }

}