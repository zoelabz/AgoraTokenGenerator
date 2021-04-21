<?php
/**
 * User: zoelabz
 * Date: 21/04/2021
 * Time: 10:54
 */

namespace Zoelabz\Agora;

class Usage extends Api
{
    /**
     *
     * @param string $from_date
     * @param string $to_data
     * @param        $projects
     *
     * @return array
     */
    public function get(string $from_date, string $to_data, $projects)
    {
        $projects = is_array($projects) ? implode(',', $projects) : $projects;
        return $this->request('GET', '/usage', compact('from_date', 'to_data', 'projects'));
    }
}