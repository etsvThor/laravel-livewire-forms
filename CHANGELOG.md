# Changelog

# 3.1.0 - unreleased

### Fixed
- Field ids are prefixed with the Livewire component id, so labels work when multiple forms are on one page
- File uploads keep working after the form re-renders

### Changed
- Field ids are now `{component id}-{field name}` instead of `{field name}`. Update any CSS or JavaScript that selects fields by id
- File inputs have `data-field-name` and `data-component` attributes, which the upload script in `form.blade.php` uses. If you override only one of `form.blade.php` and `fields/file.blade.php`, update the other too

# 2.0 - 2021-08-03

### Added
- Fixed bug when all fields are empty
- Allow preview of other disks
- Add controller for file upload


# 1.3.1 and earlier
See original repo on https://github.com/kdion4891/laravel-livewire-forms
