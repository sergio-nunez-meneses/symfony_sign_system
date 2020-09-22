<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
// use EasyCorp\Bundle\EasyAdminBundle\IdField;
// use EasyCorp\Bundle\EasyAdminBundle\TextField;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('reference'),
            TextField::new('category'),
            DateTimeField::new('purchaseDate'),
            DateTimeField::new('warrantyDate'),
            MoneyField::new('price')->setCurrency('EUR'),
            ImageField::new('receipt')->,
            TextEditorField::new('maintenance'),
            TextField::new('purchasePlace')
        ];
    }
    */
}
