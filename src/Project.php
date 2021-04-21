<?php
/**
 * @link https://docs.agora.io/cn/Interactive%20Broadcast/dashboard_restful_live?platform=All_Platforms
 * User: zoelabz
 * Date: 21/04/2021
 * Time: 10:54
 */

namespace Zoelabz\Agora;

class Project extends Api
{
    /**
     *
     * @return array
     */
    public function all()
    {
        return $this->request('GET', '/projects');
    }

    /**
     *
     * @param string      $id
     * @param string|null $name
     * @param bool        $first
     *
     * @return array
     */
    public function find($id, $name = null, $first = true)
    {
        $result = $this->request('GET', '/project', compact('id', 'name'));

        if ($first && isset($result['projects']) && count($result['projects']) > 0) {
            return $result['projects'][0];
        }

        return $result;
    }

    /**
     *
     * @param string $name
     * @param bool   $enable_sign_key
     *
     * @return array
     */
    public function create(string $name, bool $enable_sign_key = true)
    {
        return $this->request('POST', '/project', compact('name', 'enable_sign_key'));
    }

    /**
     *
     * @param string $id
     * @param int    $status
     *
     * @return array
     */
    public function setState(string $id, int $status)
    {
        return $this->request('POST', '/project/project_status', compact('id', 'status'));
    }

    /**
     *
     * @param string $id
     *
     * @return array
     */
    public function delete(string $id)
    {
        return $this->request('DELETE', '/project', compact('id'));
    }

    /**
     * IP
     *
     * @param string $id
     * @param string $recording_server
     *
     * @return array
     */
    public function setRecordConfig(string $id, string $recording_server)
    {
        return $this->request('POST', '/recording_config', compact('id', 'recording_server'));
    }

    /**
     * App Certificate
     *
     * @param string $id
     * @param bool   $enable
     *
     * @return array
     */
    public function setCertStatus(string $id, bool $enable)
    {
        return $this->request('POST', '/signkey', compact('id', 'enable'));
    }

    /**
     * App Certificate
     *
     * @param string $id
     *
     * @return array
     */
    public function resetCertificate(string $id)
    {
        return $this->request('POST', '/rest_signkey', compact('id'));
    }
}