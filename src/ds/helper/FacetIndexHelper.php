<?php

class FacetIndexHelper
{


    /**
     * ����� ��������� �������
     * @param $iblockId - id ���������, ������ �������� ����� ��������
     */
    public static function cleanFacetIndex($iblockId)
    {
        CModule::IncludeModule('iblock');
        Bitrix\Iblock\PropertyIndex\Manager::DeleteIndex($iblockId);
        Bitrix\Iblock\PropertyIndex\Manager::markAsInvalid($iblockId);
    }



}