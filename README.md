# Examples: conditional variants in the TYPO3 Form Framework

With TYPO3 v9, the Form Framework learned some new tricks!
One of them is the possibility to adapt the form depending on conditions.
The examples in this demo extension will show you how it works.

Since some configurations have changed between TYPO3 versions, you can choose the compatible version of this extension here:
- [form_variants for TYPO3 v12](https://github.com/sebkln/form_variants/tree/12.4)
- [form_variants for TYPO3 v11](https://github.com/sebkln/form_variants/tree/11.5)
- [form_variants for TYPO3 v10](https://github.com/sebkln/form_variants/tree/10.4)

## Example: Skip a page

This example contains several pages.
If you fill out the second page with the billing address and
activate the checkbox *'This is also the shipping address.'*,
the third page with the shipping address fields will be skipped.

Both the summary page and the sent email will only contain the filled
fields. No field from the skipped page is displayed for you or the user.

## Example: Fill and change fields

You get to choose: are you Mulder or Scully?

Depending on your selection, the fields on the following page will change.
Prefill a checkbox, switch a label and text. Much more is possible.

## Example: Translate with variants

Personally, I prefer to localize forms with a `locallang.xlf` file.
But it's now possible to use variants to translate a form, too!

In this example everything is translated by using variants, including some placeholders and a custom error message for an invalid email address.
