<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180405164401 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__carro AS SELECT id, nome, modelo FROM carro');
        $this->addSql('DROP TABLE carro');
        $this->addSql('CREATE TABLE carro (id INTEGER NOT NULL, nome VARCHAR(255) NOT NULL COLLATE BINARY, modelo VARCHAR(255) NOT NULL COLLATE BINARY, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO carro (id, nome, modelo) SELECT id, nome, modelo FROM __temp__carro');
        $this->addSql('DROP TABLE __temp__carro');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('ALTER TABLE carro ADD COLUMN carro_id INTEGER NOT NULL');
    }
}
