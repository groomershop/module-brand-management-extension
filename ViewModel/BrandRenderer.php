<?php
namespace Groomershop\BrandManagement\ViewModel;

class BrandRenderer implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \MageSuite\BrandManagement\Model\BrandsRepository
     */
    protected $brandsRepository;

    public function __construct(
        \MageSuite\BrandManagement\Model\BrandsRepository $brandsRepository
    ) {
        $this->brandsRepository = $brandsRepository;
    }

    public function getBrandById($id)
    {
        return $this->brandsRepository->getById(
            $id,
            // TODO $storeId ?
        );
    }
}
