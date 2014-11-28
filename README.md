# SilverStripe Anchor Field

Create anchor easily within form fields or actions lists.

The `AnchorField.ss` template can be overridden for easy styling / customisation, which is particularly useful for making links look like buttons.


## Example Usage

```php
    $actions = new FieldList(
        new AnchorField("cancel", "Cancel", $this->Link()),
        new FormAction("submit", "Submit")
    );
```