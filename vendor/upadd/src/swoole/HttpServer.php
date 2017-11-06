<?php
namespace Upadd\Swoole;

use Config;
use Upadd\Bin\Http\Dispenser;
use Upadd\Bin\UpaddException;
use swoole_http_request;
use swoole_http_response;
use swoole_http_server;
use swoole_server;


class HttpServer extends Server
{

    public $dispenser;


    /**
     * 配置文件
     * @return mixed
     */
    public function configure()
    {
        $config = Config::get('swoole@httpParam');
        $config['daemonize'] = Config::get('swoole@daemonize');
        return $config;
    }


    /**
     * @return \swoole_server
     */
    public function initServer()
    {
        $this->dispenser =  new Dispenser();
        return new swoole_http_server($this->host, $this->port);
    }

//    /**
//     * 转发任务
//     * @param $serv
//     * @param $task_id
//     * @param $from_id
//     * @param $data
//     * @return mixed
//     */
//    public function onTask(swoole_server $_server, $task_id, $from_id, $data)
//    {
//        return $this->doWork($data, ['connection_info' => $_server->connection_info($data['fd'])]);
//    }
//
//
//    /**
//     * 返回客户端
//     * @param $serv
//     * @param $task_id
//     * @param $data
//     * @return bool
//     */
//    public function onFinish(swoole_server $_server, $task_id, $data)
//    {
//        return $_server->send($data['fd'], $data['results']);
//    }
//
//    /**
//     * 具体业务逻辑代码
//     * 回调思路实现
//     * @param $param
//     * @return mixed
//     */
//    public function doWork($param = [], $client = []){}

    /**
     * 响应HTTP请求
     * @param \swoole_http_request $request
     * @param \swoole_http_response $response
     */
    public function onRequest(swoole_http_request $request, swoole_http_response $response)
    {
        return $this->response($request, $response);
    }


    /**
     * 请求相应
     * @param $request
     * @param $response
     * @return mixed
     */
    protected function response($request, $response)
    {
        $content = $this->dispenser->swoole($request);
        $response->status($content['code']);
        if(count($content['header']) >=1 ){
            foreach ($content['header'] as $key=>$val)
            {
                $response->header($key, $val);
            }
        }
        return $response->end($content['data']);
    }

    /**
     * 完成
     * @param $fd
     * @param $results
     * @return array
     */
    protected function results($fd, $results)
    {
        return [
            'fd' => $fd,
            'results' => $results
        ];
    }


}