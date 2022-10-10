<?php

namespace RomaricDrigon\MetaYaml\Exception;

class NodeValidatorException extends \Exception
{
    private $node_path;

    public function __construct($node_path, $message)
    {
        // write_log('Entering in NodeValidatorException:__construct... ');
        // write_log('with node_path: ');
        // write_log($node_path);
        // write_log('and message: ');
        // write_log($message);
        
        $this->node_path = $node_path;
        // write_log('this->node_path set to value: ');
        // write_log($this->node_path);  
        parent::__construct($message);
    }

    public function getNodePath()
    {
        return $this->node_path;
    }
}

class ChoiceNodeValidatorException extends NodeValidatorException
{
};

class UnallowedExtraKeysNodeValidatorException extends NodeValidatorException
{
};

// temp error log toolkit
if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}