<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Files;
use App\Repository\FilesRepository;
use App\Services\FilesService;

class IndexController extends AbstractController
{

    /**
     * @var FilesService
     */
    private $filesService;

    /**
     * IndexController constructor.
     * @param FilesService $filesService
     */
    public function __construct(FilesService $filesService)
    {
        $this->filesService = $filesService;
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function index()
    {
        return $this->render('index/index.html.twig');
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function admin()
    {
        return $this->render('index/admin.html.twig');
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function data()
    {
        $repository = $this->getDoctrine()->getRepository(Files::class);
        $product = $repository->findAll();
        $arr = [];
        foreach ($product as $key => $value) {
            $arr[] = [
                'id' => $value->getId(),
                'Name' => $value->getName(),
                'Size' => $value->getSize(),
                'href' => $value->getHref(),
                'Created' => $value->getCreatedAt()->format('Y-m-d H:i:s'),
            ];
        }
        return $this->json($arr);
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function upload()
    {
        $file = $this->filesService->uploadFiles();
        $entityManager = $this->getDoctrine()->getManager();
        $entityFiles = new Files();
        $entityFiles->setName($file['name']);
        $entityFiles->setSize($file['size']);
        $entityFiles->setUid($this->getUser()->getId());
        $entityFiles->setHref($file['href']);

        $entityManager->persist($entityFiles);
        $entityManager->flush();
        return $this->json(['done']);
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function download($name)
    {
        if (isset($name)) {
            return $this->file($_ENV['APP_UPLOAD_DIR'] . $name);
        } else {
            return $this->json(['download' => 'error']);
        }
    }

}
