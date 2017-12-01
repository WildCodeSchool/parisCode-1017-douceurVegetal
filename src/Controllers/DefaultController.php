<?php

    namespace DouceurVegetale\Controllers;

    use DouceurVegetale\Model\Repository\ContactManager;
    use DouceurVegetale\Model\Repository\ShopinfosManager;
    use DouceurVegetale\Model\Repository\UserManager;
    use DouceurVegetale\Model\Repository\ProductManager;
    use DouceurVegetale\Model\Repository\HomepageManager;


    /**
     * Class DefaultController
     * @package DouceurVegetale\Controllers
     */
    class DefaultController extends Controller
    {

        /**
         * Render index
         */
        public function indexAction()
        {
            $shopinfosManager = new ShopinfosManager();
            $homepageManager = new HomepageManager();
            $homepage = $homepageManager->getAllHomepage();
            $shopinfos = $shopinfosManager->getAllShopinfos();
            return $this->twig->render('user/home.html.twig', array(
                'homepage' => $homepage,
                'shopinfos' => $shopinfos
            ));
        }

        /**
         * Render products page
         */
        public function showProductsAction()
        {
            $productManager = new ProductManager();
            $products = $productManager->getAllProducts();
            $shopinfosManager = new ShopinfosManager();
            $shopinfos = $shopinfosManager->getAllShopinfos();
            return $this->twig->render('user/products.html.twig', array_merge(array('products' => $products), array('shopinfos' => $shopinfos)));
        }

        /**
         * Render values page
         */
        public function showValuesAction()
        {
            $shopinfosManager = new ShopinfosManager();
            $shopinfos = $shopinfosManager->getAllShopinfos();
            return $this->twig->render('user/values.html.twig', array(
                'shopinfos' => $shopinfos));
        }

        /**
         * Render contact page
         */
        public function showContactAction()
        {
            if ($_POST) {
                $errors = array();
                if (empty($_POST['name'])) {
                    $errors['name'] = "Merci de bien vouloir renseigner votre nom";
                }
                if (empty($_POST['email'])) {
                    $errors['email'] = "Merci de bien vouloir renseigner une adresse mail";
                }
                if (empty($_POST['message'])) {
                    $errors['message'] = "Merci de bien vouloir renseigner un message";
                }
                if (count($errors) > 0) {
                    return $this->twig->render('user/contact.html.twig', array(
                        'errors' => $errors,
                        'post' => $_POST
                    ));
                } else {
                    return $this->sendMail($_POST);
                }
            }
            $shopinfosManager = new ShopinfosManager();
            $shopinfos = $shopinfosManager->getAllShopinfos();
            return $this->twig->render('user/contact.html.twig', array(
                'shopinfos' => $shopinfos
            ));
        }


        public function showDataUser()
        {

        }

        public function editData()
        {
            return $this->twig->render('user/modify.html.twig');
        }

        public function deleteData()
        {
            return $this->twig->render('delete/.html.twig');
        }

        public function sendMail($form)
        {
            // Create the Transport
            $transport = (new \Swift_SmtpTransport('smtp.mail.fr', 465, 'ssl'))
                ->setUsername('douceurvegetale@mail.fr')
                ->setPassword('DouceurVegetale');

            // Create the Mailer using your created Transport
            $mailer = new \Swift_Mailer($transport);


            // Create a message
            $message = (new \Swift_Message($form['object'], 'text/html'))
                ->setFrom(['douceurvegetale@mail.fr' => 'Douceur Végétale'])
                ->setTo(['douceurvegetale@mail.fr' => 'Douceur Végétale'])
                ->setBody(
                    $this->twig->render('user/mail.html.twig', array(
                    'form' => $form
                )), 'text/html');

            // Send the message
            $result = $mailer->send($message, $failures);

            return $this->twig->render('user/success_contact.html.twig');
        }

    }