# SilverStripe Anchor Field

Create anchor easily within form fields or actions lists.

The `AnchorField.ss` template can be overridden for easy styling / customisation, which is particularly useful for making links look like buttons.


## Example Usage

```php

	use BurnBright\AnchorField\AnchorField;

    $actions = FieldList::create(
        AnchorField::create("cancel", "Cancel", $this->Link()),
        FormAction::create("submit", "Submit")
    );
```
