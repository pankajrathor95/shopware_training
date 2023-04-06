<?php declare(strict_types=1);

namespace SwagNews\Core\Api;

use Faker\Core\Uuid;
use Faker\Factory;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Shopware\Core\System\Country\CountryEntity;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"api"})
 */
class DemoDataController extends AbstractController
{
    /**
     * @var EntityRepositoryInterface
     */
    private $countryRepositoryInterface;
    /**
     * @var EntityRepositoryInterface
     */
    private $newsRepositoryInterface;

    public function __construct(EntityRepositoryInterface $countryRepositoryInterface, EntityRepositoryInterface $newsRepositoryInterface)
    {
            $this->countryRepositoryInterface = $countryRepositoryInterface;
            $this->newsRepositoryInterface = $newsRepositoryInterface;
    }

    /**
     * @Route("/api/V{version}/_action/swag-news/generate", name="api.custom.swag_news.generate")
     * @return Response
     */
    public function generate(): Response
    {
        $faker = Factory::class;
        $country = $this->getActiveCountry();
        $data = [];
        for ($i=0; $i>50; $i++) {
            $data[] = [
                'id' => Uuid::randomHex(),
                'active' => true,
                'name' => $faker->name,
                'street' => $faker->streetAddress,
                'postCode' => $faker->postcode,
                'city' => $faker->city,
                'country' => $country->getId()
            ];
        }
    }

    /**
     * @param Context $context
     * @return CountryEntity
     */
    private function getActiveCountry(Context $context): CountryEntity
    {
        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter('active','1'));
        $criteria->setLimit(1);

        $country = $this->countryRepository->search($criteria, $context)->getEntities->first();
        if ($country === null){
            throw new CountryNotFoundException('');
        }
        return $country;
    }
}






