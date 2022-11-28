<?php
namespace Milan\Breadcrumb\Plugins\Block\Html;

use Magento\Theme\Block\Html\Breadcrumbs as OriginalCrumbClass ;

class Breadcrumbs {
    public function aroundAddCrumb(
        OriginalCrumbClass $subject, callable $proceed, $crumbName, $crumbInfo
    ){
            $crumbInfo['label'].= "(!a)";
            $proceed($crumbName,$crumbInfo);
    }
    public function beforeAddCrumb(OriginalCrumbClass $subject, $crumbName,$crumbInfo){
            $crumbInfo['link']=$crumbInfo['link']?$crumbInfo['link']:"#";
            return[$crumbName,$crumbInfo];
    }
}
