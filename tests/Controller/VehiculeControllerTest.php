<?php

namespace App\Test\Controller;

use App\Entity\Vehicule;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VehiculeControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private VehiculeRepository $repository;
    private string $path = '/vehicule/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Vehicule::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Vehicule index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'vehicule[status]' => 'Testing',
            'vehicule[type]' => 'Testing',
            'vehicule[modele]' => 'Testing',
            'vehicule[prix]' => 'Testing',
            'vehicule[batterie]' => 'Testing',
            'vehicule[matricule]' => 'Testing',
            'vehicule[puissance]' => 'Testing',
            'vehicule[image]' => 'Testing',
            'vehicule[idreservation]' => 'Testing',
        ]);

        self::assertResponseRedirects('/vehicule/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Vehicule();
        $fixture->setStatus('My Title');
        $fixture->setType('My Title');
        $fixture->setModele('My Title');
        $fixture->setPrix('My Title');
        $fixture->setBatterie('My Title');
        $fixture->setMatricule('My Title');
        $fixture->setPuissance('My Title');
        $fixture->setImage('My Title');
        $fixture->setIdreservation('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Vehicule');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Vehicule();
        $fixture->setStatus('My Title');
        $fixture->setType('My Title');
        $fixture->setModele('My Title');
        $fixture->setPrix('My Title');
        $fixture->setBatterie('My Title');
        $fixture->setMatricule('My Title');
        $fixture->setPuissance('My Title');
        $fixture->setImage('My Title');
        $fixture->setIdreservation('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'vehicule[status]' => 'Something New',
            'vehicule[type]' => 'Something New',
            'vehicule[modele]' => 'Something New',
            'vehicule[prix]' => 'Something New',
            'vehicule[batterie]' => 'Something New',
            'vehicule[matricule]' => 'Something New',
            'vehicule[puissance]' => 'Something New',
            'vehicule[image]' => 'Something New',
            'vehicule[idreservation]' => 'Something New',
        ]);

        self::assertResponseRedirects('/vehicule/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getStatus());
        self::assertSame('Something New', $fixture[0]->getType());
        self::assertSame('Something New', $fixture[0]->getModele());
        self::assertSame('Something New', $fixture[0]->getPrix());
        self::assertSame('Something New', $fixture[0]->getBatterie());
        self::assertSame('Something New', $fixture[0]->getMatricule());
        self::assertSame('Something New', $fixture[0]->getPuissance());
        self::assertSame('Something New', $fixture[0]->getImage());
        self::assertSame('Something New', $fixture[0]->getIdreservation());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Vehicule();
        $fixture->setStatus('My Title');
        $fixture->setType('My Title');
        $fixture->setModele('My Title');
        $fixture->setPrix('My Title');
        $fixture->setBatterie('My Title');
        $fixture->setMatricule('My Title');
        $fixture->setPuissance('My Title');
        $fixture->setImage('My Title');
        $fixture->setIdreservation('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/vehicule/');
    }
}
