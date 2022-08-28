@extends('aulas.main')
@section('title', '#10 - Conexao ao banco de dados MySQL')
@section('content')
    <h4>#10 - Conexao ao banco de dados MySQL</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=zQdBSpTDQpQ&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=10" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Criacao do Banco de Dados, Conexao no Laravel e Primeiras Migrations</span><br>
    <ul>
        <li>A conexao do Laravel com o banco de dados e configurada pelo arquivo <strong>.env</strong> presente na raiz do projeto</li>
        <li>Isso nos proporciona maior liberdade e tambem seguranca na aplicacao</li>
        <li>O Laravel utiliza um <strong>ORM</strong> (Object-Relation Mapping) chamado <strong>Eloquent</strong></li>
        <li>E tambem para a criacao de tabelas as: <strong>migrations</strong></li>
    </ul>
    <br>
    <span>A partir deste ponto comecaremos a utilizar o banco de dados entao eu instalei o mysql</span><br>
    <span>Depois de instalado o usuario root ficou sem senha, entao decidi criar um usuario com senha e manter o root padrao</span><br><br>
    <span>Apos a instalacao, entrei no mysql como root e executei os passos abaixo para criacao do usuario</span><br>
    <ol>
        <li>CREATE USER 'admin'@'localhost' IDENTIFIED BY 'suzano21';</li>
        <li>GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost';</li>
        <li>FLUSH PRIVILEGES;</li>
    </ol>
    <span>caso seja necessario excluir um usuario, entrar no mysql como root e executar o passos abaixo</span>
    <ol>
        <li>SELECT USER, HOST FROM mysql.user;</li>
        <li>DROP USER 'admin'@'localhost';</li>
    </ol>
    
    <span>Criar um database depois de logado no mysql com o usuario admin: <strong>CREATE DATABASE hdcevents;</strong></span><br>
    <span>Listar todas database <strong>show databases;</strong></span><br>
    <span>Usar banco desejsado <strong>use hdcevents;</strong></span><br>
    <span>Listar todas tabelas da base de dados corrente <strong>show tables;</strong></span><br>
    <br><span>Fontes:</span>
    <ul>
        <li><a href="https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-20-04-pt" target="_blank">Instalacao MySQL</a></li>
        <li><a href="https://www.hostinger.com.br/tutoriais/como-criar-usuario-mysql-e-conceder-privilegios" target="_blank">Criar Usuario</a></li>
        <li><a href="https://stackoverflow.com/questions/20698335/error-1396-hy000-operation-drop-user-failed-for-userlocalhost" target="_blank">Excluir Usuario</a></li>
        <li><a href="https://www.codegrepper.com/code-examples/shell/ubuntu+20.04+uninstall+mariadb+10.5" target="_blank">Desinstalar MySQL</a></li>
    </ul>
    <br>

    <span>Para executar o migrate que foi exposto aula, tive problemas pois o artisan informou que o biblioteca dinamica do mysql nao estava habilitada no PHP</span><br>
    <span>Para habilitar foi necessario localizar o arquivo <strong>php.ini</strong> presente em <strong>/etc/php/7.4/apache2</strong></span><br>
    <span>E necessaria atencao, pois este arquivo tambem pode existir na pasta /etc/php/7.4/cli e este deve continuar desabilitado</span><br>
    <span>Apos descomentar a linha no php.ini executar <strong>sudo service apache2 restart</strong></span><br>
@endsection