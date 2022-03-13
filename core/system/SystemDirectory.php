<?php

namespace core\system;

class SystemDirectory
{
    private $dir;
    private $completePath;

    /**
     * Cria um diretório no sistema
     * r- leitura
     * w - gravação
     * x execução
     *       P   G   O  
     *      ---|---|--- 000 - Nenhuma permissão
     *      r--|---|--- 400 - Apenas proprietário pode ler
     *      r--|r--|r-- 444 - Todos podem ler
     *      rw-|---|--- 600 - Proprietario pode ler e escrever
     *      rw-|r--|r-- 644 - Todos podem ler, mas proprietario pode escrever
     *      rw-|rw-|rw- 666 - Todos podem ler e escrever
     *      rwx|---|--- 700 - Apenas proprietario pode executar, ler e escrever
     *      rwx|r-x|--- 750 - Proprietario tem total permissão, grupo pode ler e executar
     *      rwx|r-x|r-x 755 - Permissão de leitura (todos), escrita todos,  execução todos
     *      rwx|rwx|rwx 777 - Permissão total
     */
    public function createDirectory($path, $name)
    {
        mkdir(dirname($path).'public/'.$name);
    }

    /**
     * Verifica se o diretório tem permissões de escrita, gravação ou execução
     * @return true
     */
    public function hasDirectoryPermission($dirName)
    {
        $permission = fileperms($dirName);

        return $permission;

        
    }
}