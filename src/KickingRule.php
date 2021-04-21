<?php
/**
 * User: zoelabz
 * Date: 21/04/2021
 * Time: 10:54
 */

namespace Zoelabz\Agora;

class KickingRule extends Api
{
    /**
     * 
     * @param string $appid
     * @param array  $optional
     *
     * @return array
     */
    public function create(string $appid, array $optional = [])
    {
        return $this->request('POST', '/kicking-rule', array_merge(compact('appid'), $optional));
    }

    /**
     * 
     * @param string $appid
     *
     * @return array
     */
    public function all(string $appid)
    {
        return $this->request('GET', '/kicking-rule', compact('appid'));
    }

    /**
     * 
     * @param string $appid
     * @param string $id
     * @param string $time
     *
     * @return array
     */
    public function update(string $appid, string $id, string $time)
    {
        return $this->request('PUT', '/kicking-rule', compact('appid', 'id', 'time'));
    }

    /**
     *
     * @param string $appid
     * @param string $id
     *
     * @return array
     */
    public function delete(string $appid, string $id)
    {
        return $this->request('DELETE', '/kicking-rule', compact('appid', 'id'));
    }


}