<?php
declare(strict_types=1);
namespace Admin\Console\Ui\Component\Listing\ModuleList\Column;
class Action extends \Magento\Ui\Component\Listing\Columns\Column

{

    const URL_PATH_EDIT = 'mladmincustomform/customform/edit';
    const URL_PATH_DELETE = 'modulelist/modulelist/index';
    const URL_PATH_DISABLE='modulelist/modulelist/index';
    const URL_PATH_ENABLE='modulelist/modulelist/index';
    protected $urlBuilder;
    const URL_PATH_DETAILS = 'mladmincustomform/customform/details';

    /**
     * @param \Magento\Framework\View\Element\UiComponent\ContextInterface $context
     * @param \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param array $components
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['module'])) {
                    $item[$this->getData('name')] = [
                        'enable' => [
                            'href' => $this->urlBuilder->getUrl(
                                static::URL_PATH_ENABLE,
                                [
                                    'module' => $item['module'],
                                    'value'=> '1'
                                ]
                            ),

                            'label' => __('Enable'),
                            'confirm' => [
                                'title' => __('Enable %1',$item['module']),
                                'message' => __('Are you sure you wan\'t to Enable a %1 record ?',$item['module'])

                            ]

                        ],

                        'disable' => [

                            'href' => $this->urlBuilder->getUrl(
                                static:: URL_PATH_DISABLE,


                                [
                                    'module' => $item['module'],
                                    'value' => '2'
                                ]

                            ),




                            'label' => __('Disable'),
                            'confirm' => [
                                'title' => __('Disable %1',$item['module']),
                                'message' => __('Are you sure you wan\'t to disable a %1 record ?',$item['module'])
                            ]
                        ]
                    ];
                }
            }
        }
        
        return $dataSource;
    }
}

