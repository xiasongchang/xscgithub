<?php  
    class File{  
        private  $_dir;  
        const EXT='.txt';  
        public function __construct()  
        {  
            $this->_dir="F:/WWW/November/jiekou/basic".'/';  
        }  
        /* 
        * 生成缓存 获取缓存 删除缓存 
        * @param string $key 文件名 
        * @param string $value 数据 
        * @param string url $path 路径 
        * return 
        */  
        public function cacheDate($key,$value='',$path){  
            $filename=$this->_dir.$path.$key.self::EXT;  
           return $filename;
           // return $value;
            if($value!==''){  
                //删除缓存  
                if(is_null($value)){  
                    return @unlink($filename);  
                }  
                //将value值写入缓存  
                $dir=dirname($filename);  
                ///return $dir;
                //if(is_dir($dir)){  
                    mkdir($dir,0777);  
               // }  
                //写入缓存中  
                return file_put_contents($filename,json_encode($value));  
            }  
            // if(!is_file($filename)){  
            //     return flase;  
            // }else{  
            //     //获取缓存  
            //     return json_decode(file_get_contents($filename),true);  
            // }  
        }  
    } 
?> 