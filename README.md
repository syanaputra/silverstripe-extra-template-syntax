# silverstripe-extra-template-syntax
This module add extra syntaxes for SilverStripe templating system.

## Installation
To install this module, simply run:

```composer require syanaputra/silverstripe-extra-template-syntax```

## Usage

### Repeat
**Params:**
- Total Repeat - How many times it has to repeat
- Starting Number - The starting number

**Example:**
```silverstripe
<% loop $Repeat(3, 5) %>
    {$Index}-  
<% end_loop %>
```

**Output:**
```
5-6-7-
```

### RepeatUntil
**Params:**
- Total Repeat - How many times it has to repeat
- Starting Number - The starting number

**Example:**
```silverstripe
<% loop $RepeatUntil(5, 3) %>
    {$Index}-  
<% end_loop %>
```

**Output:**
```
3-4-5-
```

### CurrentURL
**Example:**
```silverstripe
$CurrentURL
```

**Output:**
```
https://yourdomain.com/your-current-url
```