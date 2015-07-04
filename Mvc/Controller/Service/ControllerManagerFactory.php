<?phpnamespace DoctorScript\Mvc\Controller\Service;use DoctorScript\ServiceManager\ServiceFactoryInterface;use DoctorScript\ServiceManager\ServiceLocatorInterface;use DoctorScript\Mvc\Controller\ControllerManager;class ControllerManagerFactory implements ServiceFactoryInterface{    /**     * Create configured controller manager     *     * @param  ServiceLocatorInterface $serviceLocator     * @return ServiceLocatorInterface    */    public function createService(ServiceLocatorInterface $serviceLocator)    {        $config = $serviceLocator->get('config');        $controllerManagerConfig = isset($config['controller_manager']) ? $config['controller_manager'] : [];        return new ControllerManager($controllerManagerConfig);    }}