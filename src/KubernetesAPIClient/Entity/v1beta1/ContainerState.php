<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@binarygoo.com>
 * @link http://www.binarygoo.com/
 * @copyright 2014 binarygoo
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Binarygoo\KubernetesAPIClient\Entity\v1beta1;


use Binarygoo\KubernetesAPIClient\Entity\BaseEntity;

class ContainerState extends BaseEntity implements \JsonSerializable {

    protected $waiting;

    protected $running;

    protected $termination;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateRunning
     */
    public function getRunning() {
        return $this->running;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateRunning $running
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateRunning|null
     */
    public function setRunning($running = null) {
        if ($running === null) {
            $running = new ContainerStateRunning();
            $running->_setEntityCallback([$this,__METHOD__]);
        }

        $this->running = $running;
        return $this->running;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateTerminated
     */
    public function getTermination() {
        return $this->termination;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateTerminated $termination
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateTerminated
     */
    public function setTermination($termination = null) {
        if ($termination === null) {
            $termination = new ContainerStateTerminated();
            $termination->_setEntityCallback([$this,__METHOD__]);
        }
        $this->termination = $termination;
        return $this->termination;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateWaiting
     */
    public function getWaiting() {
        return $this->waiting;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateWaiting $waiting
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerStateWaiting
     */
    public function setWaiting($waiting = null) {
        if ($waiting === null) {
            $waiting = new ContainerStateWaiting();
            $waiting->_setEntityCallback([$this,__METHOD__]);
        }
        $this->waiting = $waiting;
        return $this->waiting;
    }



} 