<?php
namespace Custom\WebBundle\Extensions\DataTag;


use Topxia\WebBundle\Extensions\DataTag\DataTag;
use Topxia\Common\ArrayToolkit;

class OrganizationZtreeDataTag  extends BaseDataTag implements DataTag
{
    /**
     * @return array 学校组织
     */
    public function getData(array $arguments)
    {   
            $ztree = array();
            $orginaztions  = $this->getOrganizationService()->findAllOrganizations();
            array_push($ztree, array('name'=>'--选择院系/专业--'));
            foreach ($orginaztions as $key => $orginaztion) {
                $orginaztion =  ArrayToolkit::parts($orginaztion, array('id', 'parentId','name'));
                array_push($ztree, $orginaztion);
            }
            return $ztree;
    }

    public function getOrganizationService()
    {
        return $this->createService('Custom:Organization.OrganizationService');
    }

}