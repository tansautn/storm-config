<?php
#if($CLASS_NAME)#set($NAME=${CLASS_NAME})#end
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};

#end
#parse("PHP Class Doc Comment.php")
class ${NAME} #if($PARENT_CLASS_EXTENDS)extends ${PARENT_CLASS_EXTENDS} #end{
    #if($PARENT_CLASS_EXTENDS)
    public function getModelClassName() {
        return $END$;
    }
    #end
}