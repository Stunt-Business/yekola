# Coding Style

Le style de code suivant s'applique dans notre projet pour les langages ci-dessous:

## PHP

### Variable Declaration

- Utiliser la syntaxe en chameau lorsque vous déclarez vos variables:

```
// comment (if applicable)
$yourVariableInCamelCase = "value";
```

### Constant declaration

- Vos constantes doivent être déclarées en majuscules avec un trait de soulignement entre chaque mot de votre nom de constante.

```
// comment (if applicable)
const PERMISSION_ADMIN = "admin";
```

- La fonction **define()** peut également être utilisée pour la déclaration de vos constantes comme suit:

```
// comment (if applicable)
define("PERMISSION_ADMIN", "admin");
```

- Lorsque vous travaillez avec le framework Laravel, vos constantes doivent être déclarées dans un fichier de configuration nommé **constants.php** sous le dossier config qui renvoie les constantes déclarées.

```
<?php
// File: config/constants.php
if(!defined("PERMISSION_ADMIN"))      
     define("PERMISSION_ADMIN", "admin"); 

if(!defined("TPORTAL_QUESTION_COUNT_FREE"))      
     define("TPORTAL_QUESTION_COUNT_FREE", 3); 

return [
     "main_domain" => [
       "permission_admin"            => PERMISSION_ADMIN, 
          "tportal_question_count_free" => TPORTAL_QUESTION_COUNT_FREE
     ]
];
?>
```

- Les constantes définies sont accessibles depuis vos contrôleurs comme suit:

```
// Access the constant PERMISSION_ADMIN
$permission_admin = config("main_domain.permission_admin");

// Access the constant TPORTAL_QUESTION_COUNT_FREE
$tportal_question_count_free = config("main_domain.tportal_question_count_free")

```
### Function declaration

- Utilisez la casse camel pour les déclarations de vos fonctions. Le return_value_type ci-dessous est facultatif.

```
 /**
  * A description of your function. 
  * @param  [describe the parameters here]
  * @return [describe the return value of your function]
  */
function yourFunctionName($params): return_value_type
{
    return "your_value";
} // end of yourFunctionName()

```

### Class declaration

- Chaque classe doit avoir son propre fichier dédié et son nom doit être déclaré avec PascalCase

```
class ClassName extends BaseClassName 
{
   //
   // Constructor
   // 
   public function __constructor() {} 
} // end of ClassName
```

## VueJs

### Working with VueJs Composition API

Tous les composantes de l'application seront développés en Composition API. 

La structure de l'implémentation en Composition est fournie ci-dessous:

```
<template>
    <div>
        <!-- Components HTML here -->
    </div>
</template>

<script setup>
    // add your code here   
</script>

<style>
    // CSS code here
</style>

```

- **Properties**: Utiliser la syntaxe en serpent (_snake case_) pour les déclarations des propriétés de vos composants VueJS

```
const props = defineProps({
    your_first_value: {
       required: false
    }, 
    your_second_value: {
       required: false
    },
    your_third_value: {
       required: fasle
    }
});

```

- **Reactive state properties**: Utiliser la syntaxe en chameau pour les déclarations des propriétés reactives de vos composents:

```
import { ref } from 'vue';

const yourFirstVariable  = ref(false);
const yourSecondVariable = ref(false);
```

- **Method declaration**: Utiliser la syntaxe en chameau (_camel case_) pour la déclaration de vos méthodes:

```

// ------------------------------
// Comment
// ------------------------------
const yourFirstMethodName = () => {
      // add your code here
} // end of your_first_method_name()

// ------------------------------
// Comment
// ------------------------------
const yourSecondMethodName = () => {
     // add your code here
} // end of your_second_method_name()


```

- **Computed properties declaration**: Utiliser la syntaxe en chameau (_camel case_) pour la déclaration de vos propriétés calculées:

```

// ------------------------------
// Comment
// ------------------------------
const yourFirstComputedProperty = computed(() => {

}) // end of yourFirstComputedProperty


// ------------------------------
// Comment
// ------------------------------
const yourSecondComputedProperty = computed(() => {

}) // end of yourSecondComputedProperty


```

- **Watcher declarations**: Déclarer vos observateurs comme suit:

```
import { watch } from 'vue'

// ------------------------------------
// Watcher for the property first_value
// ------------------------------------
watch(
    () =>   props.your_first_value, 
    (your_first_value) => {
        // add code here
    }
);

// ------------------------------------
// Watcher for the property second_value
// ------------------------------------
watch(
    () =>   props.your_second_value, 
    (your_second_value) => {
        // add code here
    },
    {immediate: true}, // toggle accordingly
    {deep: true}
);
```